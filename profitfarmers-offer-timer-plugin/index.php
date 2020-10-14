<?php
/*
    Plugin Name: Profitfarmers Countdown Timer
    Description: This plugin is for exclusive use only for Profit Farmers [profitfarmers_offer_timer /] [profitfarmers_offer_timer2 /]
    Author: Profitfarmers Devs
    Version: 1.5
    License: GPLv2 or later
*/

/*
    This program is free software; you can redistribute it and/or
    modify it under the terms of the GNU General Public License
    as published by the Free Software Foundation; either version 2
    of the License, or (at your option) any later version.
*/

class ProfitFarmersOfferTimer
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'load_offer_timer_scripts'), 100);
        add_shortcode('profitfarmers_offer_timer', array($this, '_offer_timer_plugin'));
        add_shortcode('profitfarmers_offer_timer2', array($this, '_offer_timer_plugin_2'));
    }
 
    public function _offer_timer_plugin()
    {
        wp_enqueue_style('bootstrap-css-offer-timer');
        wp_enqueue_style('fontawesome-all-offer-timer');
        wp_enqueue_style('roboto-slab-offer-timer');
        // React Style & Scripts
        wp_enqueue_style('2-chunk-css-offer-timer');
        wp_enqueue_style('main-chunk-css-offer-timer');
        wp_enqueue_script('2-chunk-offer-timer');
        wp_enqueue_script('main-chunk-offer-timer');

        ob_start();
        ?>
            <div id="root-offer-timer"></div>
            <script>!function (e) { function r(r) { for (var n, f, i = r[0], l = r[1], p = r[2], c = 0, s = []; c < i.length; c++)f = i[c], Object.prototype.hasOwnProperty.call(o, f) && o[f] && s.push(o[f][0]), o[f] = 0; for (n in l) Object.prototype.hasOwnProperty.call(l, n) && (e[n] = l[n]); for (a && a(r); s.length;)s.shift()(); return u.push.apply(u, p || []), t() } function t() { for (var e, r = 0; r < u.length; r++) { for (var t = u[r], n = !0, i = 1; i < t.length; i++) { var l = t[i]; 0 !== o[l] && (n = !1) } n && (u.splice(r--, 1), e = f(f.s = t[0])) } return e } var n = {}, o = { 1: 0 }, u = []; function f(r) { if (n[r]) return n[r].exports; var t = n[r] = { i: r, l: !1, exports: {} }; return e[r].call(t.exports, t, t.exports, f), t.l = !0, t.exports } f.m = e, f.c = n, f.d = function (e, r, t) { f.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t }) }, f.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, f.t = function (e, r) { if (1 & r && (e = f(e)), 8 & r) return e; if (4 & r && "object" == typeof e && e && e.__esModule) return e; var t = Object.create(null); if (f.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: e }), 2 & r && "string" != typeof e) for (var n in e) f.d(t, n, function (r) { return e[r] }.bind(null, n)); return t }, f.n = function (e) { var r = e && e.__esModule ? function () { return e.default } : function () { return e }; return f.d(r, "a", r), r }, f.o = function (e, r) { return Object.prototype.hasOwnProperty.call(e, r) }, f.p = "/"; var i = this["webpackJsonppf-offer-timer"] = this["webpackJsonppf-offer-timer"] || [], l = i.push.bind(i); i.push = r, i = i.slice(); for (var p = 0; p < i.length; p++)r(i[p]); var a = l; t() }([])</script>
        <?php
        return ob_get_clean();
    }

    public function _offer_timer_plugin_2()
    {
        // React Style & Scripts
        wp_enqueue_style('2-chunk-css-offer-timer2');
        wp_enqueue_style('main-chunk-css-offer-timer2');
        wp_enqueue_script('2-chunk-offer-timer2');
        wp_enqueue_script('main-chunk-offer-timer2');

        ob_start();
        ?>
            <div id="root-offer-timer-2"></div>
            <script>!function (e) { function r(r) { for (var n, f, i = r[0], l = r[1], p = r[2], c = 0, s = []; c < i.length; c++)f = i[c], Object.prototype.hasOwnProperty.call(o, f) && o[f] && s.push(o[f][0]), o[f] = 0; for (n in l) Object.prototype.hasOwnProperty.call(l, n) && (e[n] = l[n]); for (a && a(r); s.length;)s.shift()(); return u.push.apply(u, p || []), t() } function t() { for (var e, r = 0; r < u.length; r++) { for (var t = u[r], n = !0, i = 1; i < t.length; i++) { var l = t[i]; 0 !== o[l] && (n = !1) } n && (u.splice(r--, 1), e = f(f.s = t[0])) } return e } var n = {}, o = { 1: 0 }, u = []; function f(r) { if (n[r]) return n[r].exports; var t = n[r] = { i: r, l: !1, exports: {} }; return e[r].call(t.exports, t, t.exports, f), t.l = !0, t.exports } f.m = e, f.c = n, f.d = function (e, r, t) { f.o(e, r) || Object.defineProperty(e, r, { enumerable: !0, get: t }) }, f.r = function (e) { "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, { value: "Module" }), Object.defineProperty(e, "__esModule", { value: !0 }) }, f.t = function (e, r) { if (1 & r && (e = f(e)), 8 & r) return e; if (4 & r && "object" == typeof e && e && e.__esModule) return e; var t = Object.create(null); if (f.r(t), Object.defineProperty(t, "default", { enumerable: !0, value: e }), 2 & r && "string" != typeof e) for (var n in e) f.d(t, n, function (r) { return e[r] }.bind(null, n)); return t }, f.n = function (e) { var r = e && e.__esModule ? function () { return e.default } : function () { return e }; return f.d(r, "a", r), r }, f.o = function (e, r) { return Object.prototype.hasOwnProperty.call(e, r) }, f.p = "/"; var i = this["webpackJsonppf-offer-timer-2"] = this["webpackJsonppf-offer-timer-2"] || [], l = i.push.bind(i); i.push = r, i = i.slice(); for (var p = 0; p < i.length; p++)r(i[p]); var a = l; t() }([])</script>
        <?php
        return ob_get_clean();
    }

    public function load_offer_timer_scripts()
    {
        wp_register_style('bootstrap-css-offer-timer', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
        wp_register_style('fontawesome-all-offer-timer', 'https://use.fontawesome.com/releases/v5.7.0/css/all.css');
        wp_register_style('roboto-slab-offer-timer', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;500;600;700;800;900&display=swap');

        // Timer 1
        wp_register_style('2-chunk-css-offer-timer', plugins_url('/build/static/css/2.11829350.chunk.css', __FILE__));
        wp_register_style('main-chunk-css-offer-timer', plugins_url('/build/static/css/main.5f361e03.chunk.css', __FILE__));
        wp_register_script('2-chunk-offer-timer', plugins_url('/build/static/js/2.bc5e77dd.chunk.js', __FILE__), array('jquery'), false, true);
        wp_register_script('main-chunk-offer-timer', plugins_url('/build/static/js/main.55e364ff.chunk.js', __FILE__), array('jquery'), false, true);

        // Timer 2
        wp_register_style('2-chunk-css-offer-timer2', plugins_url('/build2/static/css/2.11829350.chunk.css', __FILE__));
        wp_register_style('main-chunk-css-offer-timer2', plugins_url('/build2/static/css/main.5f361e03.chunk.css', __FILE__));
        wp_register_script('2-chunk-offer-timer2', plugins_url('/build2/static/js/2.7b19b7f3.chunk.js', __FILE__), array('jquery'), false, true);
        wp_register_script('main-chunk-offer-timer2', plugins_url('/build2/static/js/main.43483654.chunk.js', __FILE__), array('jquery'), false, true);

    }
}
new ProfitFarmersOfferTimer;
