/*
	appendix.js for Bootstrap + Sass template.
	Author: Jan Prazak
	https://github.com/Amarok24/template_bootstrap5_sass_php
*/

'use strict';

// Edit the YouTube video ID here!
// Video will be loaded on demand (page performance).
const YT_VIDEO_ID = 'LaKT3pli5EQ';
// ID (#) of CSS where Youtube API should generate the iframe.
const VIDEO_CSS_ID = 'custom-video';
const MINI_NAVBAR_CSS = 'navbar-js-minified';

const el_page_nav = document.querySelector('#homepage-nav');
const el_navbar_collapsible = document.querySelector('#navbarCollapsible');
const el_nav_anchors = document.querySelectorAll('#navbarCollapsible a');
const el_video_modal = document.querySelector('#video-modal');
const el_play_button = document.querySelector('.play-button');
const el_scroll_top = document.querySelector('#arrow-scroll-to-top');
const el_toggle_light = document.querySelector('#toggle-light-mode');

const intersect_api_supported = (
	'IntersectionObserver' in window &&
	'IntersectionObserverEntry' in window);

let bs_page_nav = null;
let bs_video_modal = null;
let yt_player = null;
let yt_api_injected = false;


if (el_video_modal && el_play_button) {
	//bs_video_modal = bootstrap.Modal.getOrCreateInstance(el_video_modal);
	bs_video_modal = new bootstrap.Modal(el_video_modal);

	el_video_modal.addEventListener('hidden.bs.modal', function (ev)
	{
		console.log('bs_video_modal has been hidden');
		if (yt_player) yt_player.pauseVideo();
	});

	function inject_yt_api(ev)
	{
		if (ev.type === 'keyup' && ev.key !== 'Enter') return;
		console.log('showing bs_video_modal');
		bs_video_modal.show();

		if (yt_api_injected) {
			console.log('playing video...');
			yt_player.playVideo();
			return;
		}
		const tag_script = document.createElement('script');
		tag_script.src = 'https://www.youtube.com/iframe_api';
		let first_script_tag = document.getElementsByTagName('script')[0];
		first_script_tag.parentNode.insertBefore(tag_script, first_script_tag);
		console.log("YouTube API code injected");
		yt_api_injected = true;
	}

	el_play_button.addEventListener('click', inject_yt_api);
	el_play_button.addEventListener('keyup', inject_yt_api);
}


if (el_navbar_collapsible && el_nav_anchors) {
	//bs_page_nav = new bootstrap.Collapse(el_navbar_collapsible, {toggle: false});
	// 'toggle:false' means it should not be toggled (opened) upon creation.
	bs_page_nav = bootstrap.Collapse.getOrCreateInstance(el_navbar_collapsible, { toggle: false });

	function hamburger_toggle()
	{
		if (bs_page_nav) bs_page_nav.toggle();
		el_nav_anchors[0].focus();
	}

	function hamburger_close()
	{
		if (bs_page_nav) bs_page_nav.hide();
	}

	for (let i = 0; i < el_nav_anchors.length; i++) {
		el_nav_anchors[i].addEventListener('click', hamburger_close);
	}

	document.addEventListener('keyup', function (ev)
	{
		if (ev.key === 'Escape' || ev.key === 'Esc') hamburger_toggle();
	});
}


if (el_scroll_top) {
	function on_scroll_top_click(ev)
	{
		ev.stopPropagation();
		ev.preventDefault();
		document.querySelector('body').scrollIntoView(
			{ block: 'start', behavior: 'smooth' }
		);
	}

	el_scroll_top.addEventListener('click', on_scroll_top_click);
}


function launch_observer(css_id)
{
	const opt = {
		root: null,
		rootMargin: '0px',
		threshold: 0.5
	};

	const page_nav = document.querySelector(css_id);
	const custom_css_class = MINI_NAVBAR_CSS;

	let observer = new IntersectionObserver(handle_intersect, opt);
	let elem = document.querySelector('.header-image');

	observer.observe(elem);

	function handle_intersect(entries, observer)
	{
		// https://developer.mozilla.org/en-US/docs/Web/API/Intersection_Observer_API
		if (page_nav) {
			if (entries[0].isIntersecting) {
				page_nav.classList.remove(custom_css_class);
				el_scroll_top?.classList.add('d-none');
			} else {
				page_nav.classList.add(custom_css_class);
				el_scroll_top?.classList.remove('d-none');
			}
		}
	}
}

// Part of YT API. This event fires automatically once API is ready.
function onYouTubeIframeAPIReady()
{
	console.log('onYouTubeIframeAPIReady launched');
	yt_player = new YT.Player(VIDEO_CSS_ID, {
		width: '560',
		height: '315',
		videoId: YT_VIDEO_ID,
		playerVars: {
			// See https://developers.google.com/youtube/player_parameters
			'playsinline': 1,
			'rel': 0,
			'modestbranding': 1
		},
		events: {
			'onReady': on_player_ready
			//'onStateChange': onPlayerStateChange
		}
	});
}

// This event fires when player has finished loading and is ready.
function on_player_ready(ev)
{
	//const embedCode = ev.target.getVideoEmbedCode();
	//ev.target.playVideo();
	console.log('on_player_ready launched');
	yt_player.playVideo();
}


function handle_visibility_change()
{
	if (yt_player && document.visibilityState === 'hidden') {
		yt_player.pauseVideo();
	}
}


function toggle_light_dark(ev)
{
	ev.preventDefault();
	ev.stopPropagation();

	let is_dark_mode = false;
	// `documentElement` is the <html> element in web browser environment
	const mode_data_now = document.documentElement.dataset.bsTheme;
	if (!mode_data_now) return;

	is_dark_mode = mode_data_now === 'light' ? false : true;

	if (is_dark_mode) {
		console.log('Switching to light mode');
		document.documentElement.dataset.bsTheme = 'light';
	} else {
		console.log('Switching to dark mode');
		document.documentElement.dataset.bsTheme = 'dark';
	}
}


if (intersect_api_supported)
	launch_observer('#homepage-nav');

if (el_toggle_light && el_page_nav) {
	el_toggle_light.addEventListener('click', toggle_light_dark);
}

document.addEventListener('visibilitychange', handle_visibility_change, false);
