<?php
/*
Template Name: Iris Photo
*/
get_header();
?>
<style>
@import url('https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Manrope:wght@300;400;500;600;700&display=swap')!important;
:root {
--primary-teal: #2da6a8;
--teal-light: #3dc4c6;
--teal-dark: #1f7879;
--bg-white: #fff;
--bg-light: #f8f9fa;
--text-dark: #1a1a1a;
--text-gray: #666;
--font-display: 'Bodoni Moda', Georgia, serif;      /* Titluri - Classic Luxury */
--font-accent: 'Outfit', sans-serif;                 /* Subtitlu - Contemporary Bold */
--font-primary: 'Manrope', 'Segoe UI', sans-serif;  /* Body - Geometric Readable */
/* Primitive Color Tokens */
--color-white: rgba(255, 255, 255, 1);
--color-black: rgba(0, 0, 0, 1);
--color-cream-50: rgba(252, 252, 249, 1);
--color-cream-100: rgba(255, 255, 253, 1);
--color-gray-200: rgba(245, 245, 245, 1);
--color-gray-300: rgba(167, 169, 169, 1);
--color-gray-400: rgba(119, 124, 124, 1);
--color-slate-500: rgba(98, 108, 113, 1);
--color-brown-600: rgba(94, 82, 64, 1);
--color-charcoal-700: rgba(31, 33, 33, 1);
--color-charcoal-800: rgba(38, 40, 40, 1);
--color-slate-900: rgba(19, 52, 59, 1);
--color-teal-300: rgba(50, 184, 198, 1);
--color-teal-400: rgba(45, 166, 178, 1);
--color-teal-500: rgba(33, 128, 141, 1);
--color-teal-600: rgba(29, 116, 128, 1);
--color-teal-700: rgba(26, 104, 115, 1);
--color-teal-800: rgba(41, 150, 161, 1);
--color-red-400: rgba(255, 84, 89, 1);
--color-red-500: rgba(192, 21, 47, 1);
--color-orange-400: rgba(230, 129, 97, 1);
--color-orange-500: rgba(168, 75, 47, 1);
/* RGB versions for opacity control */
--color-brown-600-rgb: 94, 82, 64;
--color-teal-500-rgb: 33, 128, 141;
--color-slate-900-rgb: 19, 52, 59;
--color-slate-500-rgb: 98, 108, 113;
--color-red-500-rgb: 192, 21, 47;
--color-red-400-rgb: 255, 84, 89;
--color-orange-500-rgb: 168, 75, 47;
--color-orange-400-rgb: 230, 129, 97;
/* Background color tokens (Light Mode) */
--color-bg-1: rgba(59, 130, 246, 0.08); /* Light blue */
--color-bg-2: rgba(245, 158, 11, 0.08); /* Light yellow */
--color-bg-3: rgba(34, 197, 94, 0.08); /* Light green */
--color-bg-4: rgba(239, 68, 68, 0.08); /* Light red */
--color-bg-5: rgba(147, 51, 234, 0.08); /* Light purple */
--color-bg-6: rgba(249, 115, 22, 0.08); /* Light orange */
--color-bg-7: rgba(236, 72, 153, 0.08); /* Light pink */
--color-bg-8: rgba(6, 182, 212, 0.08); /* Light cyan */
/* Semantic Color Tokens (Light Mode) */
--color-background: var(--color-cream-50);
--color-surface: var(--color-cream-100);
--color-text: var(--color-slate-900);
--color-text-secondary: var(--color-slate-500);
--color-primary: var(--color-teal-500);
--color-primary-hover: var(--color-teal-600);
--color-primary-active: var(--color-teal-700);
--color-secondary: rgba(var(--color-brown-600-rgb), 0.12);
--color-secondary-hover: rgba(var(--color-brown-600-rgb), 0.2);
--color-secondary-active: rgba(var(--color-brown-600-rgb), 0.25);
--color-border: rgba(var(--color-brown-600-rgb), 0.2);
--color-btn-primary-text: var(--color-cream-50);
--color-card-border: rgba(var(--color-brown-600-rgb), 0.12);
--color-card-border-inner: rgba(var(--color-brown-600-rgb), 0.12);
--color-error: var(--color-red-500);
--color-success: var(--color-teal-500);
--color-warning: var(--color-orange-500);
--color-info: var(--color-slate-500);
--color-focus-ring: rgba(var(--color-teal-500-rgb), 0.4);
--color-select-caret: rgba(var(--color-slate-900-rgb), 0.8);
/* Common style patterns */
--focus-ring: 0 0 0 3px var(--color-focus-ring);
--focus-outline: 2px solid var(--color-primary);
--status-bg-opacity: 0.15;
--status-border-opacity: 0.25;
--select-caret-light: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23134252' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
--select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
/* RGB versions for opacity control */
--color-success-rgb: 33, 128, 141;
--color-error-rgb: 192, 21, 47;
--color-warning-rgb: 168, 75, 47;
--color-info-rgb: 98, 108, 113;
/* Typography */
--font-family-base: "FKGroteskNeue", "Geist", "Inter", -apple-system,
BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
--font-family-mono: "Berkeley Mono", ui-monospace, SFMono-Regular, Menlo,
Monaco, Consolas, monospace;
--font-size-xs: 11px;
--font-size-sm: 12px;
--font-size-base: 14px;
--font-size-md: 14px;
--font-size-lg: 16px;
--font-size-xl: 18px;
--font-size-2xl: 20px;
--font-size-3xl: 24px;
--font-size-4xl: 30px;
--font-weight-normal: 400;
--font-weight-medium: 500;
--font-weight-semibold: 550;
--font-weight-bold: 600;
--line-height-tight: 1.2;
--line-height-normal: 1.5;
--letter-spacing-tight: -0.01em;
/* Spacing */
--space-0: 0;
--space-1: 1px;
--space-2: 2px;
--space-4: 4px;
--space-6: 6px;
--space-8: 8px;
--space-10: 10px;
--space-12: 12px;
--space-16: 16px;
--space-20: 20px;
--space-24: 24px;
--space-32: 32px;
/* Border Radius */
--radius-sm: 6px;
--radius-base: 8px;
--radius-md: 10px;
--radius-lg: 12px;
--radius-full: 9999px;
/* Shadows */
--shadow-xs: 0 1px 2px rgba(0, 0, 0, 0.02);
--shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.04), 0 1px 2px rgba(0, 0, 0, 0.02);
--shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.04),
0 2px 4px -1px rgba(0, 0, 0, 0.02);
--shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.04),
0 4px 6px -2px rgba(0, 0, 0, 0.02);
--shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.15),
inset 0 -1px 0 rgba(0, 0, 0, 0.03);
/* Animation */
--duration-fast: 150ms;
--duration-normal: 250ms;
--ease-standard: cubic-bezier(0.16, 1, 0.3, 1);
/* Layout */
--container-sm: 640px;
--container-md: 768px;
--container-lg: 1024px;
--container-xl: 1280px;
}
/* Dark mode colors */
@media (prefers-color-scheme: dark) {
:root {
/* RGB versions for opacity control (Dark Mode) */
--color-gray-400-rgb: 119, 124, 124;
--color-teal-300-rgb: 50, 184, 198;
--color-gray-300-rgb: 167, 169, 169;
--color-gray-200-rgb: 245, 245, 245;
/* Background color tokens (Dark Mode) */
--color-bg-1: rgba(29, 78, 216, 0.15); /* Dark blue */
--color-bg-2: rgba(180, 83, 9, 0.15); /* Dark yellow */
--color-bg-3: rgba(21, 128, 61, 0.15); /* Dark green */
--color-bg-4: rgba(185, 28, 28, 0.15); /* Dark red */
--color-bg-5: rgba(107, 33, 168, 0.15); /* Dark purple */
--color-bg-6: rgba(194, 65, 12, 0.15); /* Dark orange */
--color-bg-7: rgba(190, 24, 93, 0.15); /* Dark pink */
--color-bg-8: rgba(8, 145, 178, 0.15); /* Dark cyan */
/* Semantic Color Tokens (Dark Mode) */
--color-background: var(--color-charcoal-700);
--color-surface: var(--color-charcoal-800);
--color-text: var(--color-gray-200);
--color-text-secondary: rgba(var(--color-gray-300-rgb), 0.7);
--color-primary: var(--color-teal-300);
--color-primary-hover: var(--color-teal-400);
--color-primary-active: var(--color-teal-800);
--color-secondary: rgba(var(--color-gray-400-rgb), 0.15);
--color-secondary-hover: rgba(var(--color-gray-400-rgb), 0.25);
--color-secondary-active: rgba(var(--color-gray-400-rgb), 0.3);
--color-border: rgba(var(--color-gray-400-rgb), 0.3);
--color-error: var(--color-red-400);
--color-success: var(--color-teal-300);
--color-warning: var(--color-orange-400);
--color-info: var(--color-gray-300);
--color-focus-ring: rgba(var(--color-teal-300-rgb), 0.4);
--color-btn-primary-text: var(--color-slate-900);
--color-card-border: rgba(var(--color-gray-400-rgb), 0.2);
--color-card-border-inner: rgba(var(--color-gray-400-rgb), 0.15);
--shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.1),
inset 0 -1px 0 rgba(0, 0, 0, 0.15);
--button-border-secondary: rgba(var(--color-gray-400-rgb), 0.2);
--color-border-secondary: rgba(var(--color-gray-400-rgb), 0.2);
--color-select-caret: rgba(var(--color-gray-200-rgb), 0.8);
/* Common style patterns - updated for dark mode */
--focus-ring: 0 0 0 3px var(--color-focus-ring);
--focus-outline: 2px solid var(--color-primary);
--status-bg-opacity: 0.15;
--status-border-opacity: 0.25;
--select-caret-light: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23134252' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
--select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
/* RGB versions for dark mode */
--color-success-rgb: var(--color-teal-300-rgb);
--color-error-rgb: var(--color-red-400-rgb);
--color-warning-rgb: var(--color-orange-400-rgb);
--color-info-rgb: var(--color-gray-300-rgb);
}
}
/* Data attribute for manual theme switching */
[data-color-scheme="dark"] {
/* RGB versions for opacity control (dark mode) */
--color-gray-400-rgb: 119, 124, 124;
--color-teal-300-rgb: 50, 184, 198;
--color-gray-300-rgb: 167, 169, 169;
--color-gray-200-rgb: 245, 245, 245;
/* Colorful background palette - Dark Mode */
--color-bg-1: rgba(29, 78, 216, 0.15); /* Dark blue */
--color-bg-2: rgba(180, 83, 9, 0.15); /* Dark yellow */
--color-bg-3: rgba(21, 128, 61, 0.15); /* Dark green */
--color-bg-4: rgba(185, 28, 28, 0.15); /* Dark red */
--color-bg-5: rgba(107, 33, 168, 0.15); /* Dark purple */
--color-bg-6: rgba(194, 65, 12, 0.15); /* Dark orange */
--color-bg-7: rgba(190, 24, 93, 0.15); /* Dark pink */
--color-bg-8: rgba(8, 145, 178, 0.15); /* Dark cyan */
/* Semantic Color Tokens (Dark Mode) */
--color-background: var(--color-charcoal-700);
--color-surface: var(--color-charcoal-800);
--color-text: var(--color-gray-200);
--color-text-secondary: rgba(var(--color-gray-300-rgb), 0.7);
--color-primary: var(--color-teal-300);
--color-primary-hover: var(--color-teal-400);
--color-primary-active: var(--color-teal-800);
--color-secondary: rgba(var(--color-gray-400-rgb), 0.15);
--color-secondary-hover: rgba(var(--color-gray-400-rgb), 0.25);
--color-secondary-active: rgba(var(--color-gray-400-rgb), 0.3);
--color-border: rgba(var(--color-gray-400-rgb), 0.3);
--color-error: var(--color-red-400);
--color-success: var(--color-teal-300);
--color-warning: var(--color-orange-400);
--color-info: var(--color-gray-300);
--color-focus-ring: rgba(var(--color-teal-300-rgb), 0.4);
--color-btn-primary-text: var(--color-slate-900);
--color-card-border: rgba(var(--color-gray-400-rgb), 0.15);
--color-card-border-inner: rgba(var(--color-gray-400-rgb), 0.15);
--shadow-inset-sm: inset 0 1px 0 rgba(255, 255, 255, 0.1),
inset 0 -1px 0 rgba(0, 0, 0, 0.15);
--color-border-secondary: rgba(var(--color-gray-400-rgb), 0.2);
--color-select-caret: rgba(var(--color-gray-200-rgb), 0.8);
/* Common style patterns - updated for dark mode */
--focus-ring: 0 0 0 3px var(--color-focus-ring);
--focus-outline: 2px solid var(--color-primary);
--status-bg-opacity: 0.15;
--status-border-opacity: 0.25;
--select-caret-light: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23134252' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
--select-caret-dark: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23f5f5f5' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
/* RGB versions for dark mode */
--color-success-rgb: var(--color-teal-300-rgb);
--color-error-rgb: var(--color-red-400-rgb);
--color-warning-rgb: var(--color-orange-400-rgb);
--color-info-rgb: var(--color-gray-300-rgb);
}
[data-color-scheme="light"] {
/* RGB versions for opacity control (light mode) */
--color-brown-600-rgb: 94, 82, 64;
--color-teal-500-rgb: 33, 128, 141;
--color-slate-900-rgb: 19, 52, 59;
/* Semantic Color Tokens (Light Mode) */
--color-background: var(--color-cream-50);
--color-surface: var(--color-cream-100);
--color-text: var(--color-slate-900);
--color-text-secondary: var(--color-slate-500);
--color-primary: var(--color-teal-500);
--color-primary-hover: var(--color-teal-600);
--color-primary-active: var(--color-teal-700);
--color-secondary: rgba(var(--color-brown-600-rgb), 0.12);
--color-secondary-hover: rgba(var(--color-brown-600-rgb), 0.2);
--color-secondary-active: rgba(var(--color-brown-600-rgb), 0.25);
--color-border: rgba(var(--color-brown-600-rgb), 0.2);
--color-btn-primary-text: var(--color-cream-50);
--color-card-border: rgba(var(--color-brown-600-rgb), 0.12);
--color-card-border-inner: rgba(var(--color-brown-600-rgb), 0.12);
--color-error: var(--color-red-500);
--color-success: var(--color-teal-500);
--color-warning: var(--color-orange-500);
--color-info: var(--color-slate-500);
--color-focus-ring: rgba(var(--color-teal-500-rgb), 0.4);
/* RGB versions for light mode */
--color-success-rgb: var(--color-teal-500-rgb);
--color-error-rgb: var(--color-red-500-rgb);
--color-warning-rgb: var(--color-orange-500-rgb);
--color-info-rgb: var(--color-slate-500-rgb);
}
*, *::before, *::after {
margin: 0;
padding: 0;
box-sizing: border-box;
}
html {
font-size: 16px;
scroll-behavior: smooth;
overflow-x: hidden;
-webkit-font-smoothing: antialiased;
}
body {
font-family: var(--font-primary) !important;
line-height: 1.7;
color: var(--text-dark);
background: var(--bg-white);
overflow-x: hidden;
}
::selection {
background: var(--primary-teal);
color: #fff;
}
::-webkit-scrollbar {
width: 10px;
}
::-webkit-scrollbar-track {
background: var(--bg-light);
}
::-webkit-scrollbar-thumb {
background: var(--primary-teal);
border-radius: 50px;
}
h1, h2, h3, h4, h5, h6 {
font-family: var(--font-display) !important;
font-weight: 700 !important;
line-height: 1.1;
margin-bottom: 1rem;
color: var(--text-dark);
letter-spacing: -0.8px !important;
}
h1 { 
font-size: clamp(2.5rem, 5vw, 4.5rem);
font-weight: 700;
letter-spacing: -1px;
}
h2 { 
font-size: clamp(2rem, 4vw, 3.5rem);
font-weight: 700;
letter-spacing: -0.8px;
}
.hero-subtitle, .section-subtitle {
font-family: var(--font-accent) !important;
font-weight: 600 !important;
letter-spacing: 2px !important;
}
.hero-title-premium, .title-line-accent {
font-family: var(--font-display) !important;
font-weight: 700 !important;
letter-spacing: -1px !important;
}
/* ===== BODY TEXT ===== */
body {
font-family: var(--font-primary);
line-height: 1.7;
color: var(--text-dark);
background: var(--bg-white);
overflow-x: hidden;
}
p { 
font-family: var(--font-primary);
font-weight: 400;
line-height: 1.7;
}
/* ===== ACCENT TEXT (RALEWAY) ===== */
.hero-subtitle,
.section-subtitle,
.transition-badge {
font-family: var(--font-accent);
font-weight: 600;
letter-spacing: 2px;
text-transform: uppercase;
}
/* ===== HERO TYPOGRAPHY ===== */
.hero-title-premium,
.title-line-accent,
.section-title-premium,
.about-title,
.transition-main-heading,
.gallery-title,
.pricing-title,
.pas-titlu {
font-family: var(--font-display);
font-weight: 700;
letter-spacing: -0.8px;
}
/* ===== CTA BUTTONS ===== */
.cta-primary,
.cta-secondary {
text-decoration: none !important;
background-clip: padding-box;
}
.stacked-cards {
position: relative;
width: 100%;
height: 380px;
perspective: 1600px;
}
/* Individual card styling */
.card {
position: absolute;
width: 320px;
height: 360px;
background: white;
border-radius: 18px;
overflow: hidden;
box-shadow: 0 20px 50px rgba(45, 166, 168, 0.15);
border: 2.5px solid rgba(45, 166, 168, 0.25);
transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
cursor: pointer;
}
.card:active {
transform: scale(0.98);
border-color: rgba(45, 166, 168, 0.6);
}
.card:active {
border-color: rgba(45, 166, 168, 0.6);
box-shadow: 
inset 0 0 20px rgba(45, 166, 168, 0.08),
0 20px 50px rgba(45, 166, 168, 0.2);
}
/* Card images */
.card-image {
width: 100%;
height: 100%;
object-fit: cover;
object-position: center;
display: block;
}
/* Card 1 - Back (left position, tilted) */
.card-1 {
left: -40px;
top: 20px;
z-index: 1;
transform: rotateZ(-8deg) rotateY(-15deg);
}
.card-1:hover {
transform: rotateZ(-8deg) rotateY(-15deg) translateY(-15px);
box-shadow: 0 35px 70px rgba(45, 166, 168, 0.2);
}
/* Card 2 - Middle (center, slightly visible) */
.card-2 {
left: 50%;
top: 10px;
z-index: 3;
transform: translateX(-50%) rotateZ(0deg) rotateY(0deg);
}
.card-2:hover {
transform: translateX(-50%) rotateZ(0deg) rotateY(0deg) translateY(-20px);
box-shadow: 0 40px 80px rgba(45, 166, 168, 0.25);
}
/* Card 3 - Front (right position, tilted) */
.card-3 {
right: -40px;
top: 20px;
z-index: 2;
transform: rotateZ(8deg) rotateY(15deg);
}
.card-3:hover {
transform: rotateZ(8deg) rotateY(15deg) translateY(-15px);
box-shadow: 0 35px 70px rgba(45, 166, 168, 0.2);
}
/* Hover effect - cards spread out */
.stacked-cards:hover .card-1 {
transform: rotateZ(-8deg) rotateY(-15deg) translateX(-60px) translateY(-20px);
}
.stacked-cards:hover .card-2 {
transform: translateX(-50%) rotateZ(0deg) rotateY(0deg) translateY(-30px);
}
.stacked-cards:hover .card-3 {
transform: rotateZ(8deg) rotateY(15deg) translateX(60px) translateY(-20px);
}
/* ===== STATS & NUMBERS ===== */
.stat-number,
.stat-value {
font-family: var(--font-display);
font-weight: 700;
}
/* ===== ANIMATIONS KEYFRAMES ===== */
* {
animation-play-state: running !important;
}
/* Disable reduced motion override - FORCE animations */
@media (prefers-reduced-motion: reduce) {
* {
animation: none !important;
transition: none !important;
}
}
@media (prefers-reduced-motion: no-preference) {
* {
animation-play-state: running !important;
}
}
/* ===== ENSURE ANIMATIONS ARE VISIBLE ===== */
.fadeInUp,
.scaleInCard,
.scaleInPas,
[class*="fadeIn"],
[class*="scaleIn"],
[class*="slideIn"],
[class*="bounce"],
[class*="float"] {
animation-play-state: running !important;
}
@keyframes fadeInUp {
from { opacity: 0; transform: translateY(30px); }
to { opacity: 1; transform: translateY(0); }
}
@keyframes slideInLeft {
from { opacity: 0; transform: translateX(-30px); }
to { opacity: 1; transform: translateX(0); }
}
@keyframes fadeIn {
from { opacity: 0; }
to { opacity: 1; }
}
@keyframes gradientShift {
0% { background-position: 0% 50%; }
50% { background-position: 100% 50%; }
100% { background-position: 0% 50%; }
}
@keyframes textGlow {
0%, 100% { filter: drop-shadow(0 0 0px rgba(45, 166, 168, 0)); }
50% { filter: drop-shadow(0 0 8px rgba(45, 166, 168, 0.4)); }
}
@keyframes expandLine {
from { width: 0; left: 50%; }
to { width: 40px; left: 0; }
}
@keyframes scrollBounce {
0%, 100% { 
opacity: 0.4; 
transform: translateY(0); 
}
50% { 
opacity: 1; 
transform: translateY(12px);
box-shadow: 0 0 10px rgba(45, 166, 168, 0.3);
}
}
@keyframes zoomIn {
from {
opacity: 0;
transform: scale(0.9) translateZ(-50px);
}
to {
opacity: 1;
transform: scale(1) translateZ(0);
}
}
@keyframes float1 {
0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0; }
50% { opacity: 0.3; }
100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
}
@keyframes float2 {
0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0; }
50% { opacity: 0.3; }
100% { transform: translateY(-100vh) translateX(-100px); opacity: 0; }
}
@keyframes float3 {
0%, 100% { transform: translateY(0px) translateX(0px); opacity: 0; }
50% { opacity: 0.3; }
100% { transform: translateY(-100vh) translateX(50px); opacity: 0; }
}
/* Hero Section Styles */
.hero-section-premium {
position: relative;
min-height: 80vh;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
background: linear-gradient(135deg, #ffffff 0%, #f0fafb 25%, #ffffff 50%, #e6f5f6 75%, #ffffff 100%);
background-size: 400% 400%;
animation: gradientFlow 15s ease infinite;
padding: 60px 0 40px;
}
@keyframes gradientFlow {
0% { background-position: 0% 50%; }
25% { background-position: 100% 50%; }
50% { background-position: 100% 100%; }
75% { background-position: 0% 100%; }
100% { background-position: 0% 50%; }
}
.hero-overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 1;
pointer-events: none;
background: 
radial-gradient(circle at 20% 30%, rgba(45, 166, 168, 0.25) 0%, transparent 35%),
radial-gradient(circle at 80% 70%, rgba(61, 196, 198, 0.2) 0%, transparent 35%),
radial-gradient(ellipse at 50% 50%, rgba(45, 166, 168, 0.1) 0%, transparent 50%),
radial-gradient(circle at 30% 80%, rgba(61, 196, 198, 0.15) 0%, transparent 40%);
background-size: 
400% 400%,
500% 500%,
600% 600%,
450% 450%;
background-position:
0% 50%,
50% 50%,
0% 50%,
50% 50%;
animation: 
irisFlow1 20s ease infinite,
irisFlow2 25s ease infinite,
irisFlow3 30s ease infinite,
irisFlow4 22s ease infinite;
}
@keyframes irisFlow1 {
0% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
50% { background-position: 100% 50%, 0% 50%, 100% 50%, 0% 50%; }
100% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
}
@keyframes irisFlow2 {
0% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
50% { background-position: 50% 0%, 50% 100%, 50% 0%, 50% 100%; }
100% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
}
@keyframes irisFlow3 {
0% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
50% { background-position: 100% 100%, 0% 0%, 100% 100%, 0% 0%; }
100% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
}
@keyframes irisFlow4 {
0% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
50% { background-position: 0% 0%, 100% 50%, 50% 100%, 50% 0%; }
100% { background-position: 0% 50%, 50% 50%, 0% 50%, 50% 50%; }
}
.hero-iris-circles {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 2;
overflow: hidden;
pointer-events: none;
}
.iris-circle {
position: absolute;
border-radius: 50%;
background: radial-gradient(circle at 30% 30%, rgba(61, 196, 198, 0.35), rgba(45, 166, 168, 0.08));
filter: blur(50px);
opacity: 0.5;
}
.iris-circle-1 {
width: 500px;
height: 500px;
top: -150px;
left: -100px;
animation: float1 25s infinite ease-in-out;
}
.iris-circle-2 {
width: 350px;
height: 350px;
top: 40%;
right: -50px;
animation: float2 30s infinite ease-in-out;
animation-delay: 5s;
}
.iris-circle-3 {
width: 400px;
height: 400px;
bottom: -100px;
left: 40%;
animation: float3 28s infinite ease-in-out;
animation-delay: 10s;
}
.iris-circle-4 {
width: 300px;
height: 300px;
top: 20%;
right: 15%;
animation: float4 26s infinite ease-in-out;
animation-delay: 7s;
}
@keyframes float1 {
0%, 100% { transform: translate(0, 0) scale(1); }
25% { transform: translate(50px, -50px) scale(1.1); }
50% { transform: translate(-30px, 30px) scale(0.9); }
75% { transform: translate(30px, 50px) scale(1.05); }
}
@keyframes float2 {
0%, 100% { transform: translate(0, 0) scale(1); }
25% { transform: translate(-40px, 40px) scale(1.05); }
50% { transform: translate(20px, -30px) scale(1.1); }
75% { transform: translate(-50px, -20px) scale(0.95); }
}
@keyframes float3 {
0%, 100% { transform: translate(0, 0) scale(1); }
25% { transform: translate(30px, -60px) scale(0.95); }
50% { transform: translate(-50px, 40px) scale(1.1); }
75% { transform: translate(40px, -30px) scale(1.02); }
}
@keyframes float4 {
0%, 100% { transform: translate(0, 0) scale(1); }
25% { transform: translate(-60px, -40px) scale(1.08); }
50% { transform: translate(50px, 50px) scale(0.92); }
75% { transform: translate(-30px, 60px) scale(1.05); }
}
.hero-content-premium {
position: relative;
z-index: 10;
width: 100%;
max-width: 1300px;
display: grid;
grid-template-columns: 1fr 1.3fr;
gap: 2.5rem;
align-items: center;
padding: 0 2rem;
}
.hero-text-container {
animation: fadeInUp 1.4s ease-out;
display: flex;
flex-direction: column;
justify-content: flex-start;
min-height: 100%;
padding-top: 0;
margin-top: 0;
}
.hero-subtitle {
display: inline-block;
font-size: 0.65rem;
font-weight: 800;
color: var(--primary-teal);
text-transform: uppercase;
letter-spacing: 3px;
margin-bottom: 2rem;
margin-top: 0;
padding: 0.6rem 1.2rem;
background: rgba(45, 166, 168, 0.08);
border-radius: 50px;
border: 1.5px solid rgba(45, 166, 168, 0.35);
animation: slideInLeft 1s ease-out;
font-family: var(--font-accent);
align-self: flex-start;
}
.hero-title-premium {
font-family: var(--font-display);
font-size: 3.8rem;
font-weight: 700;
line-height: 1.15;
color: var(--text-dark);
animation: fadeInUp 1.2s ease-out 0.2s both;
letter-spacing: -1px;
margin: 0;
padding: 0;
}
.title-line {
display: block;
color: var(--text-dark);
margin-bottom: 0.3rem;
font-size: 3rem;
}
.title-line-accent {
display: block;
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
font-weight: 700;
animation: textGlow 3s ease-in-out infinite;
font-size: 4.2rem;
line-height: 1.15;
margin-bottom: 0.3rem;
}
.hero-description {
font-family: var(--font-primary);
font-size: 1.2rem;
line-height: 1.85;
color: #626c7c;
margin-top: 2rem;
margin-bottom: 2.5rem;
max-width: 550px;
font-weight: 600;
padding: 0;
/* Perfect word break */
word-spacing: 0.05em;
letter-spacing: 0.3px;
/* Smooth text rendering */
-webkit-font-smoothing: antialiased;
-moz-osx-font-smoothing: grayscale;
/* Optimal paragraph spacing */
text-align: left;
hyphens: auto;
orphans: 3;
widows: 3;
}
.hero-stats {
display: flex;
gap: 3rem;
margin-top: 2.5rem;
animation: fadeInUp 1.6s ease-out 0.6s both;
}
.hero-cta-container {
display: flex;
gap: 1.2rem;
margin-bottom: 0;  /* ← Reduce asta dacă vreau mai sus */
animation: fadeInUp 1.8s ease-out 0.8s both;
margin-top: -11rem;  /* ← Adaugă negative margin pentru a ridica */
}
.cta-primary {
padding: 1.1rem 2.5rem;
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
color: #fff !important;
border-radius: 50px;
font-weight: 800;
font-size: 1rem;
font-family: var(--font-accent);
box-shadow: 0 6px 25px rgba(45, 166, 168, 0.35);
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
display: inline-flex;
align-items: center;
gap: 0.5rem;
position: relative;
overflow: hidden;
border: none;
cursor: pointer;
letter-spacing: 1px;
text-transform: uppercase;
text-decoration: none !important;
outline: none !important;
}
.cta-primary:hover,
.cta-primary:focus,
.cta-primary:visited {
text-decoration: none !important;
color: #fff !important;
}
.cta-secondary {
padding: 1.1rem 2.5rem;
background: rgba(45, 166, 168, 0.08);
border: 2px solid rgba(45, 166, 168, 0.3);
color: var(--primary-teal) !important;
border-radius: 50px;
font-weight: 800;
font-size: 1rem;
font-family: var(--font-accent);
transition: all 0.4s ease;
display: inline-flex;
align-items: center;
gap: 0.5rem;
cursor: pointer;
letter-spacing: 1px;
text-transform: uppercase;
text-decoration: none !important;
outline: none !important;
}
.cta-secondary:hover,
.cta-secondary:focus,
.cta-secondary:visited {
text-decoration: none !important;
color: var(--primary-teal) !important;
}
.showcase-grid {
display: grid;
grid-template-columns: 1.5fr 0.9fr; /* Mai mare raportul stânga/dreapta */
grid-template-rows: 320px 320px; /* Crescut de la 280px */
gap: 1.2rem;
width: 120%;
perspective: 1600px;
padding-top:75px;
}
.showcase-item {
position: relative;
border-radius: 24px;
overflow: hidden;
background: transparent !important;
border: 2px solid rgba(45, 166, 168, 0.2);
border-image: linear-gradient(135deg, rgba(45, 166, 168, 0.5), rgba(61, 196, 198, 0.3)) 1;
padding: 16px;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
transform-style: preserve-3d;
animation: zoomIn 0.8s ease-out both;
box-shadow: 
inset 0 0 20px rgba(45, 166, 168, 0.08),
0 0 20px rgba(45, 166, 168, 0.1);
}
.showcase-item::before {
content: '';
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: radial-gradient(circle at center, rgba(45, 166, 168, 0.02), transparent);
pointer-events: none;
border-radius: 24px;
}
.showcase-item:nth-child(1) { animation-delay: 0.6s; }
.showcase-item:nth-child(2) { animation-delay: 0.8s; }
.showcase-item:nth-child(3) { animation-delay: 1s; }
@keyframes zoomIn {
from {
opacity: 0;
transform: scale(0.9) translateZ(-50px);
}
to {
opacity: 1;
transform: scale(1) translateZ(0);
}
}
.showcase-large {
grid-row: span 2;
padding: 20px; /* Crescut de la 20px */
}
.showcase-item img {
width: 100%;
height: 100%;
object-fit: contain;
object-position: center;
display: block;
transition: transform 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
}
.showcase-large img {
object-position: center 40%;
}
.showcase-item:hover {
border-color: rgba(45, 166, 168, 0.6);
box-shadow: 0 8px 40px rgba(45, 166, 168, 0.25), inset 0 0 20px rgba(45, 166, 168, 0.1);
transform: translateY(-8px) scale(1.02);
}
.showcase-item:hover img {
transform: scale(1.1) rotate(1deg);
filter: brightness(1.1) contrast(1.05);
}
.showcase-placeholder {
width: 100%;
height: 100%;
display: flex;
flex-direction: column;
align-items: center;
justify-content: center;
padding: 2rem;
}
.natural-iris {
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-dark) 100%);
}
.gold-iris {
background: linear-gradient(135deg, var(--teal-light) 0%, var(--primary-teal) 100%);
}
.fire-iris {
background: linear-gradient(135deg, #3dc4c6 0%, #2da6a8 100%);
}
.iris-icon {
font-size: 3.5rem;
margin-bottom: 1rem;
animation: float 3s ease-in-out infinite;
}
@keyframes float {
0%, 100% { transform: translateY(0); }
50% { transform: translateY(-10px); }
}
.showcase-text {
font-size: 1.2rem;
font-weight: 700;
color: rgba(255,255,255,0.95);
text-align: center;
}
.showcase-overlay {
position: absolute;
bottom: 0;
left: 0;
right: 0;
background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, transparent 100%);
padding: 2rem 1.5rem 1.5rem;
opacity: 0;
transition: opacity 0.3s ease;
}
.showcase-item:hover .showcase-overlay {
opacity: 1;
}
.showcase-label {
color: #fff;
font-weight: 700;
font-size: 1rem;
text-align: center;
}
.hero-scroll-indicator {
position: absolute;
bottom: 60px;
left: 50%;
transform: translateX(-50%);
display: flex;
flex-direction: column;
align-items: center;
gap: 8px;
animation: fadeInDown 1.2s ease-out 1s both;
opacity: 1;
transition: opacity 0.3s ease, transform 0.3s ease;
z-index: 20;
cursor: pointer;
}
.scroll-line {
width: 2px;
height: 40px;
background: linear-gradient(to bottom, var(--primary-teal), transparent);
animation: scrollBounce 2.5s ease-in-out infinite;
border-radius: 2px;
}
.scroll-text {
font-size: 0.7rem;
writing-mode: vertical-lr;
writing-mode: vertical-rl;
transform: rotate(180deg);
letter-spacing: 2px;
text-transform: uppercase;
color: var(--text-gray);
margin-top: 6px;
font-weight: 500;
white-space: nowrap;
}
.hero-scroll-indicator.hide {
opacity: 0;
pointer-events: none;
transform: translateX(-50%) translateY(10px);
}
/* Transition Section */
/* Section Header (for About, etc) */
.about-iris-premium {
position: relative;
padding: 80px 20px;
background: linear-gradient(180deg, #fff 0%, #f8fafb 50%, #f3f7f9 100%);
overflow: hidden;
min-height: 700px;
}
.about-bg-circle {
position: absolute;
border-radius: 50%;
opacity: 0.06;
z-index: 1;
pointer-events: none;
}
.about-bg-1 {
width: 600px;
height: 600px;
background: var(--primary-teal);
top: -200px;
right: -200px;
animation: 
float-circle-1 20s ease-in-out infinite,
pulse-circle 4s ease-in-out infinite,
rotate-circle 30s linear infinite;
}
.about-bg-2 {
width: 400px;
height: 400px;
background: var(--teal-light);
bottom: -100px;
left: -100px;
animation: 
float-circle-2 25s ease-in-out infinite,
pulse-circle 5s ease-in-out infinite 1s,
rotate-circle-reverse 40s linear infinite;
}
@keyframes float-circle-1 {
0%, 100% { 
transform: translateY(0) translateX(0);
}
25% { 
transform: translateY(-50px) translateX(30px);
}
50% { 
transform: translateY(-30px) translateX(-40px);
}
75% { 
transform: translateY(20px) translateX(50px);
}
}
@keyframes float-circle-2 {
0%, 100% { 
transform: translateY(0) translateX(0);
}
25% { 
transform: translateY(40px) translateX(-50px);
}
50% { 
transform: translateY(60px) translateX(30px);
}
75% { 
transform: translateY(-20px) translateX(-60px);
}
}
/* ===== PULSE ANIMATION ===== */
@keyframes pulse-circle {
0%, 100% { 
opacity: 0.08;
transform: scale(1);
}
50% { 
opacity: 0.12;
transform: scale(1.1);
}
}
/* ===== ROTATION ANIMATIONS ===== */
@keyframes rotate-circle {
0% { 
transform: rotate(0deg);
}
100% { 
transform: rotate(360deg);
}
}
@keyframes rotate-circle-reverse {
0% { 
transform: rotate(360deg);
}
100% { 
transform: rotate(0deg);
}
}
/* ===== MORPHING EFFECT (Advanced) ===== */
@keyframes morph-circle-1 {
0%, 100% {
border-radius: 50%;
}
25% {
border-radius: 40% 60% 50% 50%;
}
50% {
border-radius: 60% 40% 60% 40%;
}
75% {
border-radius: 50% 50% 40% 60%;
}
}
@keyframes morph-circle-2 {
0%, 100% {
border-radius: 50%;
}
25% {
border-radius: 55% 45% 55% 45%;
}
50% {
border-radius: 45% 55% 45% 55%;
}
75% {
border-radius: 60% 40% 60% 40%;
}
}
/* Apply morphing effect (optional) */
.about-bg-1 {
animation: 
float-circle-1 20s ease-in-out infinite,
pulse-circle 4s ease-in-out infinite,
rotate-circle 30s linear infinite,
morph-circle-1 8s ease-in-out infinite;
}
.about-bg-2 {
animation: 
float-circle-2 25s ease-in-out infinite,
pulse-circle 5s ease-in-out infinite 1s,
rotate-circle-reverse 40s linear infinite,
morph-circle-2 10s ease-in-out infinite;
}
.about-container {
position: relative;
z-index: 10;
max-width: 1600px;
margin: 0 auto;
}
/* ===== HEADER ===== */
.about-header {
text-align: center;
margin-bottom: 80px;
animation: fadeInUp 0.8s ease-out;
}
.about-title {
font-size: clamp(2.5rem, 6vw, 4rem);
font-weight: 800;
color: var(--text-dark);
margin-bottom: 1rem;
line-height: 1.2;
letter-spacing: -1px;
}
.gradient-iris {
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
}
.about-subtitle {
font-size: 1.2rem;
color: var(--text-gray);
line-height: 1.8;
max-width: 700px;
margin: 0 auto;
}
.proces-pasi {
display: grid;
grid-template-columns: repeat(4, 1fr);  /* 4 coloane egale */
gap: 3rem;
margin-bottom: 50px;
}
/* ===== INDIVIDUAL PAS ===== */
.proces-pas {
position: relative;
padding: 40px;
background: white;
border-radius: 20px;
border: 2px solid rgba(45, 166, 168, 0.1);
text-align: center;
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
animation: scaleInPas 0.6s ease-out both;
overflow: hidden;
display: flex;
flex-direction: column;
align-items: center;
justify-content: space-between;
min-height: 420px;
gap: 1rem;
}
.proces-pas:nth-child(1) { animation-delay: 0.1s; }
.proces-pas:nth-child(2) { animation-delay: 0.2s; }
.proces-pas:nth-child(3) { animation-delay: 0.3s; }
.proces-pas:nth-child(4) { animation-delay: 0.4s; }
@keyframes scaleInPas {
from {
opacity: 0;
transform: scale(0.8) translateY(40px);
}
to {
opacity: 1;
transform: scale(1) translateY(0);
}
}
.proces-pas::before {
content: '';
position: absolute;
top: 0;
left: 0;
right: 0;
height: 4px;
background: linear-gradient(90deg, var(--primary-teal), var(--teal-light));
transform: scaleX(0);
transform-origin: left;
transition: transform 0.6s ease;
}
.proces-pas:hover::before {
transform: scaleX(1);
}
.proces-pas:hover {
transform: translateY(-15px);
border-color: rgba(45, 166, 168, 0.3);
box-shadow: 0 20px 50px rgba(45, 166, 168, 0.2);
}
/* ===== PAS NUMBER ===== */
.pas-numar {
font-size: 3.5rem;
font-weight: 900;
background: linear-gradient(135deg, var(--primary-teal), var(--teal-light));
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
opacity: 0.3;
margin-bottom: 1rem;
line-height: 1;
}
/* ===== PAS ICON ===== */
.pas-icon {
width: 140px;
height: 140px;
margin: 0 auto 1.5rem;
display: block;
animation: bounce 2s ease-in-out infinite;
filter: drop-shadow(0 4px 12px rgba(45, 166, 168, 0.15));
flex-shrink: 0;
/* SVG specific */
fill: none;
stroke-linecap: round;
stroke-linejoin: round;
}
.proces-pas:nth-child(1) .pas-icon { animation-delay: 0s; }
.proces-pas:nth-child(2) .pas-icon { animation-delay: 0.2s; }
.proces-pas:nth-child(3) .pas-icon { animation-delay: 0.4s; }
.proces-pas:nth-child(4) .pas-icon { animation-delay: 0.6s; }
@keyframes bounce {
0%, 100% { transform: translateY(0); }
50% { transform: translateY(-20px); }
}
/* ===== PAS TITLE ===== */
.pas-titlu {
font-size: clamp(1.2rem, 2.5vw, 1.5rem);
font-weight: 700;
color: var(--text-dark);
margin: 1rem 0 0.8rem;
line-height: 1.3;
letter-spacing: -0.5px;
word-spacing: 0.1em;
}
/* ===== PAS DESCRIPTION ===== */
.pas-descriere {
font-family: var(--font-primary);
font-size: 1.05rem;
color: #626c7c;
line-height: 1.8;
margin: 1.2rem 0 0 0;
padding: 0;
font-weight: 400;
flex-grow: 1;
display: flex;
align-items: center;
justify-content: center;
text-align: center;
letter-spacing: 0.3px;
max-width: 100%;
}
.proces-pas {
position: relative;
padding: 40px;
background: white;
border-radius: 20px;
border: 2px solid rgba(45, 166, 168, 0.1);
text-align: center;
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
animation: scaleInPas 0.6s ease-out both;
overflow: hidden;
display: flex;
flex-direction: column;
justify-content: space-between;
min-height: 380px;
}
.proces-pas svg,
.proces-pas img {
width: 130px;
height: 130px;
margin: 0 auto 0.5rem;
display: block;
object-fit: contain;
object-position: center;
}
/* ===== PAS LINE CONNECTOR ===== */
.pas-linie {
position: absolute;
top: 50%;
right: -3rem;
width: 3rem;
height: 2px;
background: linear-gradient(90deg, var(--primary-teal), transparent);
transform: translateY(-50%);
}
.proces-pas:last-child .pas-linie {
display: none;
}
/* ===== PROCES PROGRESS BAR ===== */
.proces-progres {
height: 6px;
background: rgba(45, 166, 168, 0.1);
border-radius: 3px;
overflow: hidden;
margin-top: 50px;
box-shadow: 0 2px 8px rgba(45, 166, 168, 0.1) inset;
}
.progres-bara {
height: 100%;
background: linear-gradient(90deg, var(--primary-teal) 0%, var(--teal-light) 50%, var(--primary-teal) 100%);
background-size: 200% 100%;
width: 0%;
animation: linearProgress 2.5s cubic-bezier(0.4, 0.1, 0.2, 0.8) forwards;
box-shadow: 0 0 12px rgba(45, 166, 168, 0.6);
}
@keyframes linearProgress {
0% { 
width: 0%;
background-position: 0% center;
}
100% { 
width: 100%;
background-position: 100% center;
}
}
.section-header-premium {
text-align: center;
margin-bottom: 4rem;
}
.section-subtitle {
display: block;
font-size: 0.9rem;
font-weight: 600;
color: var(--primary-teal);
text-transform: uppercase;
letter-spacing: 2px;
margin-bottom: 1rem;
margin-top: 40px;
}
.section-title-premium {
font-size: clamp(2rem, 4vw, 3rem);
color: var(--text-dark);
margin-bottom: 1.5rem;
}
.floating-particle {
animation: twinkleRandom 3s infinite ease-in-out !important;
}
@keyframes twinkleRandom {
0%, 100% { opacity: 0.3; transform: scale(1); }
50% { opacity: 0.8; transform: scale(1.2); }
}
.transition-section-premium {
position: relative;
min-height: 80vh;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
background: linear-gradient(135deg, #ffffff 0%, #f5fafb 50%, #eaf3f5 100%);
padding: 80px 20px;
}
/* ===== BACKGROUND LAYERS - ANIMATED ===== */
.transition-bg-layer {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 1;
pointer-events: none;
}
.transition-bg-1 {
background: radial-gradient(circle at 20% 50%, rgba(45, 166, 168, 0.1) 0%, transparent 50%);
animation: shift1 25s ease-in-out infinite;
}
.transition-bg-2 {
background: radial-gradient(circle at 80% 80%, rgba(61, 196, 198, 0.08) 0%, transparent 50%);
animation: shift2 30s ease-in-out infinite;
}
.transition-bg-3 {
background: radial-gradient(ellipse at 50% 0%, rgba(45, 166, 168, 0.05) 0%, transparent 60%);
animation: shift3 35s ease-in-out infinite;
}
@keyframes shift1 {
0%, 100% { transform: translate(0, 0); }
50% { transform: translate(50px, -50px); }
}
@keyframes shift2 {
0%, 100% { transform: translate(0, 0); }
50% { transform: translate(-50px, 50px); }
}
@keyframes shift3 {
0%, 100% { transform: translate(0, 0); }
50% { transform: translate(30px, 30px); }
}
/* ===== IRIS DECORATIONS ===== */
.iris-decoration {
display: none !important;
visibility: hidden !important;
opacity: 0 !important;
}
.iris-decoration-1,
.iris-decoration-2 {
display: none !important;
}
@keyframes float-iris {
0%, 100% { transform: translateY(0) rotate(0deg); }
50% { transform: translateY(-50px) rotate(180deg); }
}
/* ===== CONTAINER ===== */
.transition-container {
position: relative;
z-index: 10;
display: grid;
grid-template-columns: 1fr 1fr;
gap: 80px;
align-items: center;
max-width: 1600px;
margin: 0 auto;
}
/* ===== LEFT CONTENT ===== */
.transition-content-left {
animation: slideInLeft 1s ease-out 0.3s both;
}
.transition-badge {
display: inline-block;
padding: 0.6rem 1.2rem;
background: rgba(45, 166, 168, 0.12);
border-radius: 50px;
border: 1px solid rgba(45, 166, 168, 0.3);
color: var(--primary-teal);
font-weight: 600;
font-size: 0.85rem;
margin-bottom: 1.5rem;
animation: fadeInUp 0.8s ease-out 0.5s both;
}
.transition-main-heading {
font-size: clamp(2.5rem, 6vw, 4.5rem);
font-weight: 800;
line-height: 1.1;
color: var(--text-dark);
margin-bottom: 1.5rem;
letter-spacing: -1px;
animation: fadeInUp 0.8s ease-out 0.6s both;
}
.gradient-text {
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
display: block;
}
.transition-description {
font-size: 1.1rem;
color: var(--text-gray);
line-height: 1.8;
margin-bottom: 3rem;
max-width: 500px;
animation: fadeInUp 0.8s ease-out 0.7s both;
}
/* ===== STATS ROW ===== */
.transition-stats {
display: flex;
gap: 2rem;
margin-top: 3rem;
animation: fadeInUp 0.8s ease-out 0.8s both;
}
.transition-stat {
display: flex;
flex-direction: column;
}
.stat-number {
font-size: 2rem;
font-weight: 800;
color: var(--primary-teal);
line-height: 1;
}
.stat-text {
font-size: 0.85rem;
color: var(--text-gray);
margin-top: 0.5rem;
font-weight: 500;
}
/* ===== RIGHT VISUAL ===== */
.transition-visual-right {
position: relative;
height: 500px;
animation: slideInRight 1s ease-out 0.4s both;
}
.iris-showcase {
position: relative;
width: 100%;
height: 100%;
}
/* ===== IRIS CARDS ===== */
.iris-card {
position: absolute;
width: 200px;
height: 200px;
background: white;
border-radius: 20px;
box-shadow: 0 10px 40px rgba(45, 166, 168, 0.15);
border: 2px solid rgba(45, 166, 168, 0.2);
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
animation-timing-function: ease-in-out;
}
.iris-card-main {
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
width: 280px;
height: 280px;
z-index: 10;
box-shadow: 0 20px 60px rgba(45, 166, 168, 0.25);
}
.iris-card-float {
animation: float-card 6s ease-in-out infinite;
}
.iris-card-1 {
top: 10%;
right: 10%;
animation-delay: 0s;
}
.iris-card-2 {
bottom: 10%;
left: 5%;
animation-delay: 2s;
}
@keyframes float-card {
0%, 100% { transform: translateY(0) rotate(0deg); }
50% { transform: translateY(-30px) rotate(5deg); }
}
/* ===== IRIS INNER DESIGN ===== */
.iris-card-inner {
position: relative;
width: 90%;
height: 90%;
background: radial-gradient(circle at 35% 35%, #fff 0%, #f8f9fa 100%);
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
overflow: hidden;
}
.iris-ring {
position: absolute;
border-radius: 50%;
border: 2px solid;
}
.iris-ring-1 {
width: 85%;
height: 85%;
border-color: var(--primary-teal);
opacity: 0.3;
}
.iris-ring-2 {
width: 60%;
height: 60%;
border-color: var(--teal-light);
opacity: 0.5;
}
.iris-ring-3 {
width: 40%;
height: 40%;
border-color: var(--primary-teal);
opacity: 0.7;
}
.iris-pupil {
width: 15%;
height: 15%;
background: radial-gradient(circle at 30% 30%, #000, #1a1a1a);
border-radius: 50%;
z-index: 5;
box-shadow: inset -2px -2px 5px rgba(0, 0, 0, 0.3), 2px 2px 5px rgba(45, 166, 168, 0.2);
}
/* ===== ANIMATIONS ===== */
@keyframes slideInLeft {
from {
opacity: 0;
transform: translateX(-100px);
}
to {
opacity: 1;
transform: translateX(0);
}
}
@keyframes slideInRight {
from {
opacity: 0;
transform: translateX(100px);
}
to {
opacity: 1;
transform: translateX(0);
}
}
@keyframes fadeInUp {
from {
opacity: 0;
transform: translateY(30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
.gallery-container {
width: 100%;
max-width: 1400px;
margin: 0 auto;
padding: 0 var(--space-16);
position: relative;
z-index: 10;
}
.gallery-section {
padding: calc(var(--space-32) * 2.5) var(--space-20);
background: linear-gradient(135deg, var(--color-background) 0%, var(--color-surface) 100%);
position: relative;
overflow: hidden;
}
.gallery-section::before {
content: '';
position: absolute;
top: -50%;
right: -10%;
width: 400px;
height: 400px;
background: radial-gradient(circle, rgba(var(--color-teal-500-rgb), 0.08) 0%, transparent 70%);
border-radius: 50%;
pointer-events: none;
}
.gallery-section::after {
content: '';
position: absolute;
bottom: -30%;
left: -5%;
width: 350px;
height: 350px;
background: radial-gradient(circle, rgba(var(--color-teal-500-rgb), 0.06) 0%, transparent 70%);
border-radius: 50%;
pointer-events: none;
}
@media (min-width: 769px) {
.pricing-slider-dots {
display: none !important;
}
.pricing-slider-container {
position: relative;
}
.pricing-slider-arrow {
display: none !important;
}
}
/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
.pricing-cards-grid {
grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
gap: calc(var(--space-32) - var(--space-4));
}
.pricing-card {
padding: calc(var(--space-32) - var(--space-4));
}
.pricing-breakdown {
padding: calc(var(--space-24) - var(--space-4));
margin-bottom: calc(var(--space-32) - var(--space-4));
}
.breakdown-row {
padding: calc(var(--space-8) + var(--space-2)) 0;
font-size: var(--font-size-sm);
}
.tier-name {
font-size: var(--font-size-xl);
}
.cta-button {
padding: calc(var(--space-12) + var(--space-1)) var(--space-20);
font-size: var(--font-size-sm);
}
.transition-container {
grid-template-columns: 1fr;
gap: 40px;
}
.transition-visual-right {
height: 400px;
}
.iris-card-main {
width: 240px;
height: 240px;
}
.about-iris-premium {
padding: 80px 20px;
}
.proces-pasi {
gap: 2rem;
}
.pas-titlu {
font-size: 1.4rem;
}
.pas-descriere {
font-size: 0.92rem;
line-height: 1.6;
min-height: 80px;
}
.proces-pas {
min-height: 400px;
}
.pas-linie {
display: none;
}
.card {
width: 240px;
height: 300px;
}
.stacked-cards {
height: 340px;
}
.card-1 {
left: -30px;
top: 15px;
}
.card-3 {
right: -30px;
top: 15px;
}
.process-grid {
grid-template-columns: repeat(2, 1fr);
gap: 50px;
}
.section-title-premium {
font-size: 2.8rem;
}
.step-title {
font-size: 1.2rem;
}
}
@media (max-width: 768px) {
.gallery-slider-track {
     -webkit-overflow-scrolling: touch;  /* iOS fix */
    touch-action: auto;                  /* Mobile touch fix */
    overflow-x: auto;
    scroll-behavior: smooth;
display: flex;
flex-wrap: nowrap;
overflow-y: hidden;
gap: 0;
-ms-overflow-style: none;
scrollbar-width: none;
}
.gallery-slider-track::-webkit-scrollbar {
display: none;
}
.gallery-slider-item {
        flex: 0 0 calc(100% - 16px)!important;
min-width: calc(100vw - 40px) !important;
max-width: calc(100vw - 40px) !important;
width: calc(100vw - 40px) !important;
min-height: 320px !important;
margin: 0 !important;
padding: 0 !important;
}
.gallery-slider-item img {
width: 100%;
height: 100%;
object-fit: cover;
}
.pricing-section-premium {
overflow: hidden !important;
padding: 0 !important;
margin: 0 !important;
}
.pricing-slider-dots {
display: flex !important;
gap: 10px;
justify-content: center;
margin-bottom: 2rem; /* CRESCUT de la 1.5rem */
padding: 1rem 20px 0 20px; /* Added padding top */
flex-wrap: wrap;
order: -1;
background: transparent; /* Transparent background */
}
.pricing-slider-dot {
width: 12px;
height: 12px;
border-radius: 50%;
background: rgba(45, 166, 168, 0.3);
border: none;
cursor: pointer;
transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
padding: 0;
position: relative;
}
.pricing-slider-dot:hover {
background: rgba(45, 166, 168, 0.6);
transform: scale(1.15);
}
.pricing-slider-dot.active {
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
width: 28px;
border-radius: 6px;
box-shadow: 0 4px 12px rgba(45, 166, 168, 0.4);
}
.pricing-cards-grid {
display: flex;
flex-wrap: nowrap;
overflow-x: auto;
overflow-y: hidden;
gap: 1.5rem;
padding: 0 8px !important;
margin: 0; /* RESET margin sa nu acopere dots */
scroll-behavior: smooth;
-ms-overflow-style: none;
scrollbar-width: none;
}
.pricing-cards-grid::-webkit-scrollbar {
display: none;
}
.pricing-card {
flex: 0 0 calc(100vw - 60px) !important;
min-width: calc(100vw - 60px) !important;
max-width: calc(100vw - 60px) !important;
margin: 0 !important;
padding: 1.5rem !important;
}
.pricing-card-header {
margin-bottom: var(--space-24);
}
.tier-badge {
font-size: var(--font-size-xs);
padding: var(--space-6) var(--space-12);
margin-bottom: calc(var(--space-8) + var(--space-2));
letter-spacing: 0.05em;
}
.tier-name {
font-size: var(--font-size-xl);
font-weight: var(--font-weight-bold);
margin-bottom: var(--space-6);
letter-spacing: var(--letter-spacing-tight);
}
.tier-description {
font-size: var(--font-size-sm);
margin: 0;
line-height: var(--line-height-normal);
color: var(--color-text-secondary);
}
.pricing-slider-controls {
display: flex !important;
gap: 2px !important;
justify-content: center !important;
align-items: center !important;
flex-wrap: nowrap !important;
position: relative !important;
z-index: 20 !important;
background: transparent !important;
width: auto !important;
margin: 0 auto 1.5rem auto !important;
padding: 0 !important;
}
.pricing-slider-dots {
display: flex !important;
gap: 8px !important;
justify-content: center !important;
align-items: center !important;
flex-wrap: nowrap !important;
order: 2 !important;
}
.pricing-slider-arrow-prev {
order: 1 !important;
}
.pricing-slider-arrow-next {
order: 3 !important;
}
.pricing-slider-arrow {
width: 32px !important;
height: 32px !important;
border-radius: 50% !important;
background: transparent !important;
border: 2px solid rgba(45, 166, 168, 0.4) !important;
color: var(--color-primary) !important;
cursor: pointer !important;
transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) !important;
padding: 0 !important;
display: flex !important;
align-items: center !important;
justify-content: center !important;
flex-shrink: 0 !important;
}
.pricing-slider-arrow:hover {
background: rgba(45, 166, 168, 0.2) !important;
border-color: var(--color-primary) !important;
transform: scale(1.1) !important;
}
.pricing-slider-arrow:active {
background: rgba(45, 166, 168, 0.3) !important;
transform: scale(0.95) !important;
}
.pricing-slider-dot {
width: 10px !important;
height: 10px !important;
border-radius: 50% !important;
background: rgba(45, 166, 168, 0.3) !important;
border: none !important;
cursor: pointer !important;
transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1) !important;
padding: 0 !important;
position: relative !important;
flex-shrink: 0 !important;
}
.pricing-slider-dot:hover {
background: rgba(45, 166, 168, 0.6) !important;
transform: scale(1.2) !important;
}
.pricing-slider-dot.active {
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%) !important;
width: 24px !important;
border-radius: 5px !important;
box-shadow: 0 2px 8px rgba(45, 166, 168, 0.3) !important;
}
.pricing-breakdown {
padding: calc(var(--space-24) - var(--space-4));
margin-bottom: var(--space-24);
border-radius: var(--radius-base);
background: var(--color-secondary);
}
.breakdown-row {
padding: calc(var(--space-8) - var(--space-2)) 0;
font-size: var(--font-size-base);
display: flex;
justify-content: space-between;
align-items: center;
}
.breakdown-label {
font-size: var(--font-size-sm);
flex: 1;
padding-right: calc(var(--space-8) + var(--space-2));
}
.breakdown-value {
font-size: var(--font-size-base);
text-align: right;
white-space: nowrap;
}
.breakdown-value-total {
font-size: calc(var(--font-size-lg) + var(--space-1));
text-align: right;
}
.features-section {
margin-bottom: var(--space-24);
}
.features-title {
font-size: var(--font-size-sm);
margin-bottom: calc(var(--space-8) + var(--space-2));
font-weight: var(--font-weight-bold);
text-transform: uppercase;
letter-spacing: 0.03em;
}
.feature-item {
font-size: var(--font-size-sm);
gap: calc(var(--space-8) - var(--space-2));
}
.feature-icon {
width: 16px;
height: 16px;
}
.cta-button {
padding: var(--space-12) var(--space-20);
font-size: var(--font-size-base);
letter-spacing: 0.04em;
border-radius: var(--radius-base);
}
.popular-badge {
top: -12px;
right: 15px;
padding: calc(var(--space-6) + var(--space-1)) calc(var(--space-12) + var(--space-2));
font-size: var(--font-size-xs);
}
.stacked-cards {
height: 300px;
}
.card {
width: 300px;
height: 320px;
border-radius: 14px;
}
.card-1 {
left: -20px;
top: 10px;
}
.card-3 {
right: -20px;
top: 10px;
}
.stacked-cards:hover .card-1 {
transform: rotateZ(-8deg) rotateY(-15deg) translateX(-40px) translateY(-15px);
}
.stacked-cards:hover .card-3 {
transform: rotateZ(8deg) rotateY(15deg) translateX(40px) translateY(-15px);
}
.proces-pas {
padding: 35px 20px;
min-height: auto;
gap: 1.6rem;
}
.pas-icon,
.proces-pas svg,
.proces-pas img {
width: 95px;
height: 95px;
}
.pas-numar {
font-size: 2.8rem;
font-weight: 700;
margin-bottom: 1.2rem;
line-height: 1;
}
.pas-titlu {
font-size: 1.6rem;
font-weight: 600;
margin: 0.6rem 0 1rem;
line-height: 1.3;
}
.pas-descriere {
font-size: 1.05rem;
line-height: 2;
margin: 0;
color: var(--color-text-secondary);
}
.hero-section-premium {
min-height: 100vh;
padding: 60px 0 40px;
display: flex;
align-items: center;
justify-content: center;
background: linear-gradient(135deg, #ffffff 0%, #f0fafb 25%, #ffffff 50%, #e6f5f6 75%, #ffffff 100%);
background-size: 400% 400%;
animation: gradientFlow 15s ease infinite;
}
.hero-content-premium {
grid-template-columns: 1fr !important;
gap: 1.5rem !important;
padding: 0 20px !important;
width: 100% !important;
}
.hero-text-container {
animation: slideInDown 0.8s ease-out;
align-content: center;
}
.hero-subtitle {
display: inline-block;
font-size: 0.6rem !important;
font-weight: 800 !important;
color: var(--primary-teal);
text-transform: uppercase;
letter-spacing: 3.5px !important;
margin-bottom: 1.5rem;
background: rgba(45, 166, 168, 0.15) !important;
border-radius: 50px;
border: 2px solid rgba(45, 166, 168, 0.4) !important;
padding: 20px;
font-family: var(--font-accent);
}
.hero-title-premium {
font-family: var(--font-display);
font-size: 3.2rem !important;
font-weight: 800 !important;
line-height: 1.1 !important;
color: var(--text-dark);
animation: fadeInUp 0.9s ease-out 0.2s both;
letter-spacing: -2px !important;
word-spacing: 0.05em;
margin-bottom: 0.8rem;
}
.title-line-accent {
display: block;
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
font-family: var(--font-display);
font-weight: 800 !important;
animation: textGlowMobile 3s ease-in-out infinite;
font-size: 3.6rem !important;
text-shadow: 0 0 30px rgba(45, 166, 168, 0.3);
letter-spacing: -2px;
line-height: 1.1;
}
.hero-description {
font-size: 1.05rem !important;
line-height: 1.8 !important;
color: var(--text-gray);
margin-top: 2.5rem;
max-width: 100%1
padding-top: 0;
animation: fadeInUp 1s ease-out 0.4s both;
font-weight: 600;
font-family: var(--font-primary);
letter-spacing: 0.3px;
}
.hero-stats {
display: none !important;
}
.hero-cta-container {
display: flex !important;
flex-direction: column !important;
gap: 1.2rem !important;
margin-top: 2.5rem !important;
width: 100% !important;
animation: fadeInUp 1.2s ease-out 0.6s both;
}
.cta-primary,
.cta-secondary {
padding: 1.3rem 2.5rem !important;
width: 100% !important;
border-radius: 50px !important;
font-size: 1.1rem !important;
font-weight: 800 !important;
display: flex !important;
align-items: center !important;
justify-content: center !important;
transition: all 0.3s ease !important;
letter-spacing: 1.2px !important;
text-transform: uppercase !important;
font-family: var(--font-accent);
}
.cta-primary {
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%) !important;
box-shadow: 0 10px 30px rgba(45, 166, 168, 0.4) !important;
}
.  .cta-primary:active {
transform: scale(0.95) !important;
}
.cta-secondary {
background: rgba(45, 166, 168, 0.15) !important;
border: 2.5px solid rgba(45, 166, 168, 0.5) !important;
}
.cta-secondary:active {
background: rgba(45, 166, 168, 0.25) !important;
transform: scale(0.95) !important;
}
/* Showcase Grid */
.showcase-grid {
grid-template-columns: 1fr !important;
gap: 1.2rem !important;
padding-top: 2.5rem !important;
animation: slideInUp 0.9s ease-out 0.3s both;
}
.showcase-item {
position: relative;
border-radius: 20px;
overflow: hidden;
border: 2.5px solid rgba(45, 166, 168, 0.25) !important;
padding: 0 !important;
display: flex;
align-items: center;
justify-content: center;
min-height: 300px !important;
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
box-shadow: 
inset 0 0 20px rgba(45, 166, 168, 0.08),
0 0 20px rgba(45, 166, 168, 0.1);
animation: zoomInPlay 0.8s ease-out both;
}
.showcase-item:nth-child(2),
.showcase-item:nth-child(3) {
display: none !important;
}
.showcase-item:nth-child(1) { animation-delay: 0.4s; }
.showcase-item:active {
transform: scale(0.98);
border-color: rgba(45, 166, 168, 0.6);
}
.showcase-large {
grid-row: span 1 !important;
min-height: 300px !important;
}
.showcase-item img {
width: 100% !important;
height: 100% !important;
object-fit: contain !important;
object-position: center;
display: block;
transition: transform 0.4s ease;
}
.showcase-item:active img {
transform: scale(1.05);
}
.hero-scroll-indicator {
display: none !important;
}
.iris-circle {
opacity: 0 !important;
}
.about-iris-premium {
padding: 80px 15px !important;
}
.about-title {
font-family: var(--font-display);
font-size: 2.4rem !important;
font-weight: 800 !important;
letter-spacing: -1.5px !important;
line-height: 1.1 !important;
margin-bottom: 1.5rem;
}
.about-subtitle {
font-family: var(--font-primary);
font-size: 1.15rem !important;
line-height: 1.8 !important;
font-weight: 500;
}
.gradient-iris {
font-family: var(--font-display);
font-weight: 800 !important;
}
/* ===== PROCESS SECTION - BOLD & IMPACTANT ===== */
.proces-pasi {
grid-template-columns: 1fr !important;
gap: 1.5rem !important;
}
.proces-pas {
padding: 30px 20px !important;
min-height: auto !important;
}
.pas-numar {
font-family: var(--font-display);
font-size: 3.2rem !important;
font-weight: 800 !important;
margin-bottom: 1rem;
}
.pas-icon {
font-size: 3.5rem !important;
margin-bottom: 1.2rem;
}
.pas-titlu {
font-family: var(--font-display);
font-size: 1.5rem !important;
font-weight: 800 !important;
letter-spacing: -0.5px !important;
margin: 1rem 0 1rem;
line-height: 1.2;
}
.pas-descriere {
font-family: var(--font-primary);
font-size: 1.05rem !important;
line-height: 1.7 !important;
font-weight: 500;
margin: 1rem 0 1.5rem;
max-height: none !important;
overflow: visible !important;
}
/* ===== TRANSITION SECTION - BOLD & IMPACTANT ===== */
.transition-section-premium {
padding: 60px 15px !important;
}
.transition-container {
grid-template-columns: 1fr !important;
gap: 3rem !important;
}
.transition-badge {
font-family: var(--font-accent);
font-size: 0.9rem !important;
font-weight: 800 !important;
letter-spacing: 2.5px !important;
padding: 0.7rem 1.2rem !important;
}
.transition-main-heading {
font-family: var(--font-display);
font-size: 2.4rem !important;
font-weight: 800 !important;
letter-spacing: -1.5px !important;
line-height: 1.1 !important;
margin-bottom: 1.5rem;
}
.gradient-text {
font-family: var(--font-display);
font-weight: 800 !important;
display: block;
}
.transition-description {
font-family: var(--font-primary);
font-size: 1.15rem !important;
line-height: 1.8 !important;
font-weight: 500;
margin-bottom: 2rem;
}
.stat-number {
font-family: var(--font-display);
font-size: 2.2rem !important;
font-weight: 800 !important;
letter-spacing: -0.5px !important;
}
.stat-text {
font-family: var(--font-primary);
font-size: 0.9rem !important;
font-weight: 500;
}
/* ===== SECTION HEADERS - BOLD & IMPACTANT ===== */
.section-subtitle {
font-family: var(--font-accent);
font-size: 0.95rem !important;
font-weight: 800 !important;
letter-spacing: 3px !important;
text-transform: uppercase;
}
.section-title-premium {
font-family: var(--font-display);
font-size: 2.2rem !important;
font-weight: 800 !important;
letter-spacing: -1.2px !important;
line-height: 1.15 !important;
margin-bottom: 1.5rem;
}
/* ===== BENEFIT ITEMS ===== */
.benefit-item-premium h3 {
font-family: var(--font-display);
font-size: 1.4rem !important;
font-weight: 800 !important;
letter-spacing: -0.3px !important;
margin-bottom: 1rem;
}
.benefit-item-premium p {
font-family: var(--font-primary);
font-size: 1rem !important;
line-height: 1.7 !important;
font-weight: 400;
}
/* ===== SHOWCASE TEXT ===== */
.showcase-text {
font-family: var(--font-display);
font-size: 1.3rem !important;
font-weight: 800 !important;
letter-spacing: -0.3px !important;
}
.showcase-label {
font-family: var(--font-display);
font-size: 1.15rem !important;
font-weight: 800 !important;
}
/* ===== BUTTONS & CTA ===== */
.btn, button, input[type="button"], input[type="submit"] {
font-family: var(--font-accent);
font-weight: 800 !important;
letter-spacing: 1px !important;
text-transform: uppercase !important;
font-size: 1rem !important;
}
/* ===== LINKS ===== */
a {
font-family: var(--font-primary);
font-weight: 600;
}
/* ===== GENERAL TEXT ===== */
p {
font-family: var(--font-primary);
font-size: 1.05rem !important;
line-height: 1.8 !important;
font-weight: 400;
}
strong, b {
font-weight: 800 !important;
font-family: var(--font-display);
}
em, i {
font-family: var(--font-primary);
font-style: italic;
}
.process-section-premium {
padding: 60px 0;
}
.section-header-premium {
margin-bottom: 50px;
}
.section-title-premium {
font-size: 2.2rem;
margin-bottom: 0.8rem;
}
.section-description-premium {
font-size: 1rem;
}
.section-subtitle {
font-size: 0.75rem;
padding: 6px 12px;
margin-bottom: 0.8rem;
}
.process-timeline-wrapper {
padding: 0;
}
.timeline-track {
left: 22px;
width: 2px;
top: 0;
bottom: 0;
}
.process-grid {
grid-template-columns: 1fr !important;
gap: 20px !important;
padding: 0 16px;
}
.process-step-premium {
padding: 30px 20px !important;
min-height: auto;
display: block;
}
.process-step-premium:last-child {
margin-bottom: 0;
}
.step-number-badge {
position: absolute;
left: -3px;
top: 0;
width: 50px;
height: 50px;
font-size: 1.2rem;
z-index: 5;
}
.step-icon-container {
width: 70px;
height: 70px;
margin-bottom: 1.2rem;
}
.step-icon-container svg {
width: 40px;
height: 40px;
}
.step-marker-dot {
position: absolute;
left: 8px;
top: 58px;
width: 16px;
height: 16px;
z-index: 4;
}
.step-content-wrapper {
flex-direction: column;
gap: 0;
}
.step-text {
padding: 20px;
border-radius: 10px;
width: 100%;
background: white;
border: 1px solid rgba(45, 166, 168, 0.1);
box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
}
.step-title {
font-size: 1.2rem !important;
color: #0a0a0a !important;
font-weight: 700 !important;
margin-bottom: 0.8rem;
}
.step-description {
font-size: 0.9rem;
margin-bottom: 1rem;
line-height: 1.5;
color: #000000;
}
.step-highlights {
gap: 0.5rem;
list-style: none;
}
.step-highlights li {
font-size: 0.8rem;
color: #2da6a8;
}
.gallery-section {
padding: calc(var(--space-32) + var(--space-12)) var(--space-16);
}
.section-header h2 {
font-size: 2rem;
}
.gallery-masonry {
grid-template-columns: repeat(auto-fill , minmax(150px, 1fr));
gap: 15px;
}
.gallery-tall {
grid-row: span 1;
}
.gallery-item-premium {
min-height: 200px;
border-radius: 8px;
}
.gallery-slider-item {
flex: 0 0 100% !important;
min-width: 100% !important;
max-width: 100% !important;
width: 100% !important;
min-height: 320px;
}
.overlay-content h4 {
font-size: 1rem;
}
.zoom-btn {
width: 40px;
height: 40px;
}
.overlay-content h4 {
font-size: 1rem;
}
.overlay-content p {
font-size: 0.85rem;
}
.zoom-btn {
width: 40px;
height: 40px;
}
.category-tag {
font-size: 0.75rem;
padding: 5px 10px;
}
.slider-controls {
gap: 15px;
margin-top: 25px;
}
.slider-btn {
width: 45px;
height: 45px;
font-size: 1.2rem;
}
.slider-dot {
width: 10px;
height: 10px;
}
.slider-dot.active {
width: 25px;
}
.slider-info {
font-size: 0.9rem;
margin-top: 15px;
}
.modal-content {
max-width: 95vw;
max-height: 85vh;
}
.modal-title {
padding: 15px;
font-size: 16px;
}
.modal-close {
width: 35px;
height: 35px;
font-size: 24px;
}
}
/* ===== OVERLAY CONTENT ===== */
.overlay-content {
animation: slideUp 0.3s ease;
}
@keyframes slideUp {
from {
transform: translateY(20px);
opacity: 0;
}
to {
transform: translateY(0);
opacity: 1;
}
}
.overlay-content h4 {
color: #fff;
margin: 0 0 8px 0;
font-size: 1.2rem;
font-weight: 700;
font-family: 'Playfair Display', Georgia, serif;
}
.client-name {
color: rgba(255, 255, 255, 0.95);
font-size: 0.95rem;
margin: 0 0 12px 0;
font-weight: 500;
}
/* ===== OVERLAY ACTIONS ===== */
.overlay-actions {
display: flex;
align-items: center;
justify-content: space-between;
gap: 12px;
margin-top: 12px;
}
.zoom-btn {
background: rgba(255, 255, 255, 0.25);
border: 1px solid rgba(255, 255, 255, 0.5);
color: #fff;
width: 44px;
height: 44px;
border-radius: 50%;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s ease;
padding: 0;
}
.zoom-btn:hover {
background: rgba(255, 255, 255, 0.4);
transform: scale(1.15);
border-color: rgba(255, 255, 255, 0.8);
}
.zoom-btn svg {
width: 22px;
height: 22px;
}
.category-tag {
background: rgba(255, 255, 255, 0.25);
color: #fff;
padding: 8px 16px;
border-radius: 25px;
font-size: 0.8rem;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 0.5px;
border: 1px solid rgba(255, 255, 255, 0.3);
}
/* ===== PLACEHOLDER GALLERY ===== */
.gallery-placeholder-premium {
width: 100%;
height: 100%;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
gap: 12px;
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
}
.placeholder-icon {
font-size: 3.5rem;
animation: pulse 2s ease-in-out infinite;
}
.placeholder-gradient {
position: absolute;
width: 100%;
height: 100%;
top: 0;
left: 0;
}
.placeholder-gradient.natural {
background: linear-gradient(135deg, rgba(61, 196, 198, 0.4), rgba(45, 166, 168, 0.4));
}
.placeholder-gradient.galaxy {
background: linear-gradient(135deg, rgba(75, 0, 130, 0.4), rgba(138, 43, 226, 0.4));
}
.placeholder-gradient.fire {
background: linear-gradient(135deg, rgba(255, 69, 0, 0.4), rgba(255, 140, 0, 0.4));
}
.placeholder-gradient.gold {
background: linear-gradient(135deg, rgba(255, 215, 0, 0.4), rgba(218, 165, 32, 0.4));
}
/* ===== GALLERY FILTER ===== */
.gallery-filter {
display: flex;
justify-content: center;
gap: 12px;
margin-top: 40px;
flex-wrap: wrap;
}
.filter-btn {
background: rgba(45, 166, 168, 0.1);
border: 2px solid rgba(45, 166, 168, 0.3);
color: #2da6a8;
padding: 12px 28px;
border-radius: 30px;
cursor: pointer;
font-weight: 600;
font-size: 0.95rem;
transition: all 0.3s ease;
text-transform: uppercase;
letter-spacing: 0.5px;
}
.filter-btn:hover,
.filter-btn.active {
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
color: #fff;
border-color: transparent;
transform: translateY(-2px);
box-shadow: 0 6px 20px rgba(45, 166, 168, 0.3);
}
/* ===== MODAL/LIGHTBOX ===== */
.gallery-modal {
display: none;
position: fixed;
top: 0;
left: 0;
right: 0;
bottom: 0;
z-index: 3000;
}
.gallery-modal.active {
display: flex;
align-items: center;
justify-content: center;
}
.modal-overlay {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: rgba(0, 0, 0, 0.9);
backdrop-filter: blur(8px);
animation: fadeIn 0.3s ease;
}
.modal-content {
position: relative;
z-index: 3001;
max-width: 90vw;
max-height: 90vh;
animation: zoomIn 0.3s ease;
}
@keyframes fadeIn {
from { opacity: 0; }
to { opacity: 1; }
}
@keyframes zoomIn {
from {
opacity: 0;
transform: scale(0.9);
}
to {
opacity: 1;
transform: scale(1);
}
}
.modal-image {
max-width: 100%;
max-height: 90vh;
object-fit: contain;
border-radius: 8px;
}
.modal-close {
position: absolute;
top: -50px;
right: 0;
background: none;
border: none;
color: #fff;
font-size: 2.5rem;
cursor: pointer;
transition: transform 0.3s ease;
line-height: 1;
padding: 10px 15px;
}
.modal-close:hover {
transform: scale(1.2) rotate(90deg);
}
/* ===== PULSE ANIMATION ===== */
@keyframes pulse {
0%, 100% {
transform: scale(1);
}
50% {
transform: scale(1.15);
}
}
}
/* ===== EXTRA SMALL PHONES - 480px ===== */
@media (max-width: 480px) {
.gallery-slider-item {
flex: 0 0 calc(100% - var(--space-10) * 2);
min-width: calc(100% - var(--space-10) * 2);
min-height: 240px;
border-radius: var(--radius-md);
border: 1px solid var(--color-card-border);
}
.process-section-premium {
padding: 40px 0;
}
.section-header-premium {
margin-bottom: 30px;
}
.section-title-premium {
font-size: 1.6rem;
margin-bottom: 0.5rem;
letter-spacing: -0.5px;
}
.section-subtitle {
font-size: 0.75rem;
padding: 0.4rem 0.8rem;
margin-bottom: 0.8rem;
}
.section-description-premium {
font-size: 0.9rem;
max-width: 100%;
}
.process-grid {
grid-template-columns: 1fr !important;
gap: 12px !important;
padding: 0 10px;
}
.process-step-premium {
padding: 20px 14px !important;
margin-bottom: 10px;
}
.step-number-badge {
width: 48px;
height: 48px;
font-size: 1.2rem;
margin-bottom: 1rem;
box-shadow: 0 4px 12px rgba(45, 166, 168, 0.2);
}
.step-icon-container {
width: 60px;
height: 60px;
margin-bottom: 0.8rem;
}
.step-icon-container svg {
width: 32px;
height: 32px;
}
.step-title {
font-size: 1rem !important;
color: #0a0a0a !important;
font-weight: 700 !important;
margin-bottom: 0.6rem;
}
.step-description {
font-size: 0.8rem;
line-height: 1.5;
margin-bottom: 0.6rem;
}
.step-highlights {
gap: 0.5rem;
}
.step-highlights li {
font-size: 0.75rem;
padding-left: 18px;
}
.step-highlights li::before {
font-size: 0.9rem;
}
/* About section */
.about-iris-premium {
padding: 60px 12px !important;
}
.about-title {
font-size: 2rem !important;
letter-spacing: -1.2px !important;
}
.about-subtitle {
font-size: 1rem !important;
line-height: 1.6 !important;
}
/* Process section */
.proces-pas {
padding: 25px 16px !important;
}
.pas-numar {
font-size: 2.8rem !important;
}
.pas-icon {
font-size: 3rem !important;
}
.pas-titlu {
font-size: 1.3rem !important;
letter-spacing: -0.3px !important;
}
.pas-descriere {
font-size: 0.95rem !important;
line-height: 1.6 !important;
}
/* Transition section */
.transition-section-premium {
padding: 50px 12px !important;
}
.transition-main-heading {
font-size: 2rem !important;
letter-spacing: -1.2px !important;
}
.transition-description {
font-size: 1rem !important;
line-height: 1.6 !important;
}
.stat-number {
font-size: 1.8rem !important;
}
/* Section titles */
.section-title-premium {
font-size: 1.9rem !important;
letter-spacing: -1px !important;
}
.section-subtitle {
font-size: 0.85rem !important;
letter-spacing: 2.5px !important;
}
/* Benefit items */
.benefit-item-premium h3 {
font-size: 1.2rem !important;
}
.benefit-item-premium p {
font-size: 0.95rem !important;
}
/* Buttons */
.btn, button, .cta-primary, .cta-secondary {
font-size: 0.95rem !important;
letter-spacing: 0.8px !important;
}
/* General */
p {
font-size: 0.95rem !important;
line-height: 1.6 !important;
}
}
@media (max-width: 480px) {
.hero-section-premium {
min-height: auto;
padding: 50px 0 30px;
}
.hero-title-premium {
font-size: clamp(1.7rem, 5vw, 2.5rem) !important;
}
.title-line-accent {
font-size: 2rem;
}
.hero-subtitle {
font-size: 0.75rem;
padding: 0.4rem 0.8rem;
}
.hero-description {
font-size: 0.95rem;
line-height: 1.6;
}
.showcase-item {
min-height: 220px !important;
}
.showcase-large {
min-height: 220px !important;
}
}
@keyframes slideInDown {
from { opacity: 0; transform: translateY(-30px); }
to { opacity: 1; transform: translateY(0); }
}
@keyframes slideInUp {
from { opacity: 0; transform: translateY(30px); }
to { opacity: 1; transform: translateY(0); }
}
@keyframes textGlowMobile {
0%, 100% { filter: drop-shadow(0 0 5px rgba(45, 166, 168, 0)); }
50% { filter: drop-shadow(0 0 12px rgba(45, 166, 168, 0.4)); }
}
@keyframes zoomInPlay {
from { opacity: 0; transform: scale(0.9) translateY(20px); }
to { opacity: 1; transform: scale(1) translateY(0); }
}
@keyframes bounce {
0%, 100% { transform: translateY(0); }
50% { transform: translateY(-8px); }
}
@keyframes fadeInUp {
from { opacity: 0; transform: translateY(20px); }
to { opacity: 1; transform: translateY(0); }
.transition-section-premium {
min-height: auto;
padding: 60px 20px;
}
.transition-main-heading {
font-size: 2rem;
}
.transition-stats {
gap: 1.5rem;
flex-wrap: wrap;
}
.transition-visual-right {
height: 350px;
}
.iris-card-main {
width: 200px;
height: 200px;
}
.iris-card-float {
width: 150px !important;
height: 150px !important;
}
.about-iris-premium {
padding: 60px 15px;
}
.about-title {
font-size: 2rem;
margin-bottom: 1rem;
}
.about-subtitle {
font-size: 1rem;
line-height: 1.6;
}
.proces-pasi {
grid-template-columns: 1fr;
gap: 1.2rem;
}
.proces-pas {
min-height: auto;
padding: 30px 20px;
display: block;
}
.pas-numar {
font-size: 3rem;
margin-bottom: 0.8rem;
}
.pas-icon {
font-size: 3.5rem;
margin-bottom: 1.2rem;
}
.pas-titlu {
font-size: 1.4rem;
font-weight: 800;
margin: 1rem 0 1.2rem;
line-height: 1.2;
}
.pas-descriere {
font-size: 1rem;
line-height: 1.8;
margin: 1rem 0 1.5rem;
min-height: auto;
max-height: none;
display: block;
overflow: visible;
-webkit-line-clamp: unset;
}
}
@media (max-width: 480px) {
.transition-main-heading {
font-size: 1.6rem;
}
.transition-description {
font-size: 1rem;
}
.transition-visual-right {
height: 280px;
}
.iris-card-main {
width: 180px;
height: 180px;
}
.about-iris-premium {
padding: 50px 12px;
}
.about-title {
font-size: 1.7rem;
margin-bottom: 0.8rem;
}
.about-subtitle {
font-size: 0.95rem;
line-height: 1.5;
}
.proces-pasi {
grid-template-columns: 1fr;
gap: 1rem;
}
.proces-pas {
min-height: auto;
padding: 25px 18px;
display: block;
}
.pas-numar {
font-size: 2.5rem;
margin-bottom: 0.6rem;
}
.pas-icon {
font-size: 3rem;
margin-bottom: 1rem;
}
.pas-titlu {
font-size: 1.3rem;
font-weight: 800;
margin: 0.8rem 0 1rem;
line-height: 1.15;
}
.pas-descriere {
font-size: 0.95rem;
line-height: 1.75;
margin: 0.8rem 0 1.2rem;
min-height: auto;
max-height: none;
display: block;
overflow: visible;
-webkit-line-clamp: unset;
}
.pas-linie {
display: none !important;
}
}
/* ===== IRIS LENS BACKGROUND EFFECT ===== */
.hero-iris-background {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 1;
overflow: hidden;
}
#irisCanvas {
width: 100%;
height: 100%;
display: block;
}
.iris-overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: radial-gradient(circle at center, transparent 0%, rgba(45, 166, 168, 0.15) 100%);
pointer-events: none;
}
.hero-overlay {
z-index: 2;
}
.hero-content-premium {
z-index: 10;
}
/* About Section (Visual + Benefits) */
.about-grid-premium {
display: grid;
grid-template-columns: 1fr 1fr;
gap: 3rem;
align-items: center;
}
.visual-container {
position: relative;
}
.about-main-image {
width: 100%;
border-radius: 8px;
box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}
.floating-elements {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
pointer-events: none;
}
.float-element {
position: absolute;
border-radius: 50%;
background: var(--primary-teal);
opacity: 0.5;
animation: floatParticle 4s ease-in-out infinite alternate;
}
.float-1 { width: 10px; height: 10px; top: 10%; left: 15%; animation-duration: 5s; }
.float-2 { width: 15px; height: 15px; bottom: 5%; right: 20%; background: var(--teal-light); animation-duration: 6s; }
.float-3 { width: 8px; height: 8px; top: 50%; left: 80%; background: var(--teal-dark); animation-duration: 4s; }
@keyframes floatParticle {
0% { transform: translateY(0); }
100% { transform: translateY(-15px); }
}
.benefits-premium {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
gap: 3rem;
margin-top: 3rem;
}
.benefit-item-premium {
text-align: center;
padding: 2rem;
}
.benefit-icon-premium {
font-size: 3rem;
margin-bottom: 1rem;
color: var(--primary-teal);
}
.benefit-item-premium h3 {
font-size: 1.5rem;
margin-bottom: 1rem;
color: var(--text-dark);
}
.benefit-item-premium p {
color: var(--text-gray);
}
.about-quote {
margin-top: 2rem;
text-align: center;
font-style: italic;
color: var(--text-gray);
}
.about-quote cite {
display: block;
margin-top: 0.5rem;
font-style: normal;
color: var(--text-dark);
}
/* Process Section (Timeline) */
.process-section-premium {
padding: 80px 0;
background: linear-gradient(135deg, 
rgba(245, 245, 245, 0.5) 0%,
rgba(252, 252, 252, 0.3) 100%);
position: relative;
overflow: hidden;
}
.process-section-premium::before {
content: '';
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: 
radial-gradient(circle at 20% 50%, rgba(45, 166, 168, 0.03) 0%, transparent 50%),
radial-gradient(circle at 80% 80%, rgba(45, 166, 168, 0.03) 0%, transparent 50%);
pointer-events: none;
z-index: 0;
}
.section-header-premium {
text-align: center;
margin-bottom: 80px;
position: relative;
z-index: 1;
}
.section-subtitle {
display: inline-block;
font-size: 0.95rem;
font-weight: 600;
color: var(--color-primary);
text-transform: uppercase;
letter-spacing: 2px;
margin-bottom: 1.5rem;
padding: 0.5rem 1.5rem;
background: rgba(45, 166, 168, 0.08);
border-radius: 50px;
border: 1px solid rgba(45, 166, 168, 0.2);
}
.section-title-premium {
font-size: 3.5rem;
font-weight: 700;
margin: 0 0 1rem;
line-height: 1.2;
color: var(--color-text);
max-width: 800px;
margin-left: auto;
margin-right: auto;
}
.section-description-premium {
font-size: 1.25rem;
color: var(--color-text-secondary);
max-width: 600px;
margin: 1.5rem auto 0;
line-height: 1.6;
}
/* ===== TIMELINE WRAPPER ===== */
.process-timeline-wrapper {
position: relative;
z-index: 1;
}
.timeline-track {
position: absolute;
left: 50%;
transform: translateX(-50%);
top: 120px;
bottom: 0;
width: 3px;
background: linear-gradient(to bottom, 
rgba(45, 166, 168, 0.3) 0%,
rgba(45, 166, 168, 0.1) 100%);
display: none;
}
/* ===== PROCESS GRID ===== */
.process-grid {
display: grid;
grid-template-columns: repeat(4, 1fr);
gap: 40px;
position: relative;
}
/* ===== INDIVIDUAL STEP ===== */
.process-step-premium {
position: relative;
padding: 0;
animation: fadeInUp 0.8s ease-out both;
}
.process-step-premium:nth-child(1) { animation-delay: 0.1s; }
.process-step-premium:nth-child(2) { animation-delay: 0.2s; }
.process-step-premium:nth-child(3) { animation-delay: 0.3s; }
.process-step-premium:nth-child(4) { animation-delay: 0.4s; }
.step-number-badge {
display: inline-flex;
align-items: center;
justify-content: center;
width: 60px;
height: 60px;
background: linear-gradient(135deg, #2da6a8, #32b8c6);
color: white;
border-radius: 50%;
font-size: 1.75rem;
font-weight: 700;
margin-bottom: 2rem;
box-shadow: 0 8px 24px rgba(45, 166, 168, 0.25);
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
}
.process-step-premium:hover .step-number-badge {
transform: translateY(-8px) scale(1.05);
box-shadow: 0 16px 40px rgba(45, 166, 168, 0.35);
}
.step-marker-dot {
position: absolute;
top: 55px;
left: 50%;
transform: translateX(-50%);
width: 16px;
height: 16px;
background: white;
border: 4px solid var(--color-primary);
border-radius: 50%;
display: none;
z-index: 2;
}
.step-content-wrapper {
display: flex;
flex-direction: column;
}
.step-icon-container {
width: 80px;
height: 80px;
display: flex;
align-items: center;
justify-content: center;
background: linear-gradient(135deg, 
rgba(45, 166, 168, 0.1) 0%,
rgba(45, 166, 168, 0.05) 100%);
border-radius: 16px;
margin-bottom: 1.5rem;
color: var(--color-primary);
transition: all 0.4s ease;
}
.process-step-premium:hover .step-icon-container {
background: linear-gradient(135deg, 
rgba(45, 166, 168, 0.15) 0%,
rgba(45, 166, 168, 0.08) 100%);
transform: translateY(-4px);
}
.step-text {
display: flex;
flex-direction: column;
}
.step-title {
font-size: 1.35rem;
font-weight: 700 !important;  /* ← Schimbat de la 650 la 700 */
margin: 0 0 1rem;
color: #0a0a0a !important;    /* ← Schimbat de la #1a1a1a la negru real */
line-height: 1.3;
letter-spacing: -0.3px;
}
.step-description {
font-size: 1rem;
color: var(--color-text-secondary);
line-height: 1.7;
margin: 0 0 1.5rem;
}
.step-highlights {
list-style: none;
padding: 0;
margin: 0;
display: flex;
flex-direction: column;
gap: 0.8rem;
}
.step-highlights li {
font-size: 0.95rem;
color: var(--color-text-secondary);
padding-left: 24px;
position: relative;
line-height: 1.5;
}
.step-highlights li::before {
content: '✓';
position: absolute;
left: 0;
top: 0;
color: var(--color-primary);
font-weight: 700;
font-size: 1.1rem;
}
/* ===== ANIMATIONS ===== */
@keyframes fadeInUp {
from {
opacity: 0;
transform: translateY(30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
/* Packages Section */
.packages-section-premium {
padding: 6rem 0;
background: #ffffff;
position: relative;
overflow: hidden;
}
.pricing-slider-dots {
display: flex;
gap: 8px;
justify-content: center;
align-items: center;
flex-wrap: nowrap;
position: relative;
z-index: 20;
background: transparent;
width: 100%;
margin-bottom: 1.5rem;
padding: 0.5rem 20px 0 20px;
}
.pricing-slider-dots.visible {
display: flex;
}
.pricing-slider-dot {
width: 10px;
height: 10px;
border-radius: 50%;
background: rgba(45, 166, 168, 0.3);
border: none;
cursor: pointer;
transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
padding: 0;
position: relative;
flex-shrink: 0; /* Nu se comprimă */
}
.pricing-slider-dot:hover {
background: rgba(45, 166, 168, 0.6);
transform: scale(1.15);
}
.pricing-slider-dot.active {
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
width: 28px;
border-radius: 6px;
box-shadow: 0 4px 12px rgba(45, 166, 168, 0.4);
}
.section-header {
text-align: center;
margin-bottom: 4rem;
}
.section-subtitle {
display: inline-block;
font-size: 0.85rem;
font-weight: 700;
color: #2da6a8;
text-transform: uppercase;
letter-spacing: 2px;
margin-bottom: 1rem;
padding: 0.5rem 1rem;
background: rgba(45, 166, 168, 0.1);
border-radius: 50px;
border: 1px solid rgba(45, 166, 168, 0.25);
}
.section-title-premium {
font-size: clamp(2rem, 4vw, 3.5rem);
color: #1a1a1a;
margin-bottom: 1rem;
font-weight: 600;
}
.section-description {
font-size: 1.1rem;
color: #666;
}
.container {
max-width: 1200px;
margin: 0 auto;
padding: 0 2rem;
}
.packages-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
gap: 2rem;
align-items: stretch;
}
/* Package Card */
.package-card {
background: #ffffff;
border: 2px solid rgba(45, 166, 168, 0.15);
border-radius: 20px;
padding: 2.5rem;
transition: all 0.4s ease;
position: relative;
display: flex;
flex-direction: column;
overflow: hidden;
}
.package-card:hover {
border-color: rgba(45, 166, 168, 0.5);
box-shadow: 0 12px 40px rgba(45, 166, 168, 0.15);
transform: translateY(-8px);
}
/* Featured Package (Standard) */
.package-featured {
border: 2.5px solid #2da6a8;
box-shadow: 0 8px 30px rgba(45, 166, 168, 0.2);
transform: scale(1.05);
background: linear-gradient(135deg, #ffffff 0%, rgba(45, 166, 168, 0.03) 100%);
}
.package-featured:hover {
box-shadow: 0 16px 50px rgba(45, 166, 168, 0.3);
transform: scale(1.08) translateY(-8px);
}
/* Promo Badge */
.package-badge {
position: absolute;
top: -10px;
right: -40px;
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
padding: 0.5rem 3rem;
transform: rotate(45deg);
width: 300px;
text-align: center;
}
.badge-text {
display: block;
color: #ffffff;
font-size: 0.75rem;
font-weight: 800;
letter-spacing: 2px;
transform: rotate(-45deg);
text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}
/* Package Header */
.package-header {
margin-bottom: 1.5rem;
}
.package-name {
font-size: 1.8rem;
color: #1a1a1a;
margin-bottom: 0.5rem;
font-weight: 700;
}
.package-description {
font-size: 0.95rem;
color: #666;
margin: 0;
}
.pricing-section-premium {
background: linear-gradient(135deg, #fafbfc 0%, #f0f8f9 100%);
position: relative;
overflow: hidden;
}
.pricing-section-premium::before {
content: '';
position: absolute;
top: -50%;
right: -10%;
width: 400px;
height: 400px;
background: radial-gradient(circle, rgba(45, 166, 168, 0.08) 0%, transparent 70%);
border-radius: 50%;
pointer-events: none;
}
.pricing-section-premium::after {
content: '';
position: absolute;
bottom: -30%;
left: -5%;
width: 350px;
height: 350px;
background: radial-gradient(circle, rgba(61, 196, 198, 0.06) 0%, transparent 70%);
border-radius: 50%;
pointer-events: none;
}
.container {
max-width: 1200px;
margin: 0 auto;
position: relative;
z-index: 2;
}
.pricing-header {
text-align: center;
margin-bottom: 60px;
animation: fadeInDown 0.8s ease-out;
}
.pricing-subtitle {
display: inline-block;
font-size: 0.85rem;
font-weight: 700;
color: #2da6a8;
text-transform: uppercase;
letter-spacing: 2px;
margin-bottom: 1rem;
padding: 8px 16px;
background: rgba(45, 166, 168, 0.1);
border-radius: 50px;
}
.pricing-title {
text-align: center;
font-size: clamp(2.5rem, 6vw, 4rem);
font-weight: 800;
color: var(--text-dark);
margin-bottom: 1rem;
line-height: 1.2;
letter-spacing: -1px;
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
}
.pricing-description {
font-size: 1.1rem;
color: #666;
max-width: 600px;
margin: 0 auto;
line-height: 1.6;
}
.pricing-categories {
margin-bottom: 4rem;
}
.pricing-category {
margin-bottom: 4rem;
}
.category-title {
font-size: 1.8rem;
font-weight: 800;
color: #1a1a1a;
margin-bottom: 2rem;
text-align: center;
padding-bottom: 1.5rem;
border-bottom: 2px solid rgba(45, 166, 168, 0.2);
letter-spacing: -0.3px;
}
.pricing-cards-grid {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
gap: 2rem;
margin-bottom: 2rem;
position: relative;
z-index: 1;
overflow-x: auto;
-webkit-overflow-scrolling: touch;
}
.pricing-card {
position: relative;
background: white;
border-radius: 16px;
padding: 2rem;
border: 1px solid rgba(45, 166, 168, 0.1);
box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
animation: slideInUp 0.6s ease-out both;
display: flex;
flex-direction: column;
}
.pricing-card:hover {
transform: translateY(-8px);
border-color: #2da6a8;
box-shadow: 0 12px 40px rgba(45, 166, 168, 0.15);
}
.pricing-card-header {
margin-bottom: 2rem;
}
.tier-badge {
display: inline-block;
font-size: 0.75rem;
font-weight: 800;
color: white;
background: #2da6a8;
padding: 6px 12px;
border-radius: 6px;
margin-bottom: 1rem;
text-transform: uppercase;
letter-spacing: 1px;
}
.tier-name {
font-size: 1.4rem;
font-weight: 800;
color: #1a1a1a;
margin-bottom: 0.5rem;
letter-spacing: -0.3px;
}
.tier-description {
font-size: 0.9rem;
color: #666;
line-height: 1.6;
margin: 0;
}
.pricing-breakdown {
background: #f9f9f9;
border-radius: 10px;
padding: 1.5rem;
margin-bottom: 2rem;
border: 1px solid rgba(45, 166, 168, 0.08);
}
.breakdown-row {
display: flex;
justify-content: space-between;
align-items: center;
padding: 0.8rem 0;
font-size: 0.95rem;
border-bottom: 1px solid rgba(45, 166, 168, 0.1);
}
.breakdown-row.separator {
border-bottom: 2px solid #2da6a8;
font-weight: 700;
margin-top: 0.5rem;
padding-top: 1rem;
}
.breakdown-label {
color: #666;
font-weight: 500;
}
.breakdown-value {
color: #1a1a1a;
font-weight: 600;
}
.breakdown-value-total {
color: #2da6a8;
font-weight: 800;
font-size: 1.1rem;
}
.features-section {
flex-grow: 1;
margin-bottom: 2rem;
}
.features-title {
font-size: 0.9rem;
font-weight: 700;
color: #1a1a1a;
margin-bottom: 1rem;
text-transform: uppercase;
letter-spacing: 0.5px;
}
.features-list {
list-style: none;
display: flex;
flex-direction: column;
gap: 0.7rem;
}
.feature-item {
display: flex;
align-items: center;
gap: 0.8rem;
font-size: 0.9rem;
color: #666;
line-height: 1.5;
}
.feature-icon {
flex-shrink: 0;
width: 16px;
height: 16px;
color: #2da6a8;
stroke-width: 3;
}
.cta-button {
width: 100%;
padding: 14px 24px;
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
color: white;
border: none;
border-radius: 10px;
font-size: 0.95rem;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 1px;
cursor: pointer;
transition: all 0.3s ease;
box-shadow: 0 6px 20px rgba(45, 166, 168, 0.35);
}
.cta-button:hover {
transform: translateY(-2px);
box-shadow: 0 10px 30px rgba(45, 166, 168, 0.45);
}
.cta-button:active {
transform: translateY(0);
}
.popular-badge {
position: absolute;
top: -12px;
right: 20px;
background: linear-gradient(135deg, #FFD700 0%, #FFA500 100%);
color: #333;
padding: 8px 16px;
border-radius: 50px;
font-size: 0.8rem;
font-weight: 700;
box-shadow: 0 4px 15px rgba(255, 215, 0, 0.4);
}
.pricing-info-section {
display: grid;
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
gap: 2rem;
margin-top: 4rem;
padding-top: 3rem;
border-top: 1px solid rgba(45, 166, 168, 0.2);
}
.info-box {
background: white;
padding: 2rem;
border-radius: 12px;
border-left: 4px solid #2da6a8;
text-align: center;
animation: fadeInUp 0.8s ease-out both;
}
.info-box:nth-child(1) { animation-delay: 0.1s; }
.info-box:nth-child(2) { animation-delay: 0.2s; }
.info-box:nth-child(3) { animation-delay: 0.3s; }
.info-box h4 {
font-size: 1.1rem;
font-weight: 700;
color: #1a1a1a;
margin-bottom: 0.8rem;
}
.info-box p {
font-size: 0.9rem;
color: #666;
line-height: 1.6;
margin: 0;
}
@keyframes fadeInDown {
from {
opacity: 0;
transform: translateY(-30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
@keyframes slideInUp {
from {
opacity: 0;
transform: translateY(30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
@keyframes fadeInUp {
from {
opacity: 0;
transform: translateY(20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
/* CTA Buttons */
.package-btn {
display: inline-block;
padding: 1rem 2rem;
border-radius: 50px;
font-weight: 600;
text-align: center;
transition: all 0.3s ease;
border: 2px solid rgba(45, 166, 168, 0.3);
background: rgba(45, 166, 168, 0.08);
color: #2da6a8;
text-decoration: none;
cursor: pointer;
}
.package-btn:hover {
background: rgba(45, 166, 168, 0.15);
border-color: rgba(45, 166, 168, 0.6);
transform: translateY(-2px);
}
.gallery-slider-wrapper {
position: relative;
overflow: hidden;
margin: 40px 0;
width: 100%;
}
.gallery-slider-track {
display: flex;
gap: 20px;
transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
will-change: transform;
width: 100%;
padding: 0 20px;
  overflow-x: auto;
    overflow-y: hidden;
    scroll-behavior: smooth;
    -webkit-overflow-scrolling: touch;
    touch-action: auto;
    flex-shrink: 0;
}
.gallery-slider-item {
flex: 0 0 calc(33.333% - 14px);
min-width: calc(33.333% - 14px);
min-height: 400px;
}
/* ===== SLIDER NAVIGATION ===== */
.slider-controls {
display: flex;
align-items: center;
justify-content: center;
gap: 20px;
margin-top: 30px;
}
.slider-btn {
width: 50px;
height: 50px;
border-radius: 50%;
background: var(--primary-teal);
color: white;
border: none;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s ease;
}
.slider-btn:hover {
transform: scale(1.1);
box-shadow: 0 8px 20px rgba(45, 166, 168, 0.3);
}
.slider-btn:disabled {
opacity: 0.3;
cursor: not-allowed;
background: #ccc;
}
.slider-btn.prev::before {
content: "❮";
}
.slider-btn.next::before {
content: "❯";
}
/* ===== SLIDER DOTS ===== */
.slider-dots {
display: flex;
gap: 10px;
justify-content: center;
}
.slider-dot {
width: 12px;
height: 12px;
border-radius: 50%;
background: rgba(45, 166, 168, 0.3);
border: none;
cursor: pointer;
transition: all 0.3s ease;
}
.slider-dot:hover {
background: rgba(45, 166, 168, 0.5);
}
.slider-dot.active {
background: var(--primary-teal);
width: 30px;
border-radius: 6px;
}
/* ===== SLIDER INFO ===== */
.slider-info {
text-align: center;
margin-top: 20px;
color: var(--text-gray);
font-size: 0.95rem;
}
.slider-info span {
color: #2da6a8;
font-weight: bold;
}
/* ===== RESPONSIVE ===== */
@media (min-width: 1025px) {
.gallery-slider-item {
flex: 0 0 calc(33.333% - 14px);
min-width: calc(33.333% - 14px);
}
}
/* Tablet - 2 coloane */
@media (min-width: 768px) and (max-width: 1024px) {
.gallery-slider-item {
flex: 0 0 calc(50% - 10px);
min-width: calc(50% - 10px);
}
}
/* Mobile - 1 coloană FULL WIDTH */
@media (max-width: 767px) {
.gallery-slider-item {
flex: 0 0 100%;
min-width: 100%;
height: 300px;
}
.gallery-slider-track {
gap: 0;
}
.slider-btn {
width: 45px;
height: 45px;
font-size: 1.2rem;
}
.slider-controls {
gap: 10px;
}
}
/* Primary Button (Featured) */
.package-btn-primary {
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
color: #ffffff;
border: none;
font-weight: 700;
box-shadow: 0 6px 20px rgba(45, 166, 168, 0.3);
}
.package-btn-primary:hover {
background: linear-gradient(135deg, #289093 0%, #3db3b5 100%);
box-shadow: 0 8px 30px rgba(45, 166, 168, 0.5);
transform: translateY(-4px);
}
/* Promo Text */
.promo-text {
text-align: center;
font-size: 0.85rem;
color: #ff6b6b;
font-weight: 600;
margin-top: 0.75rem;
animation: pulse 2s ease-in-out infinite;
}
.gallery-section {
padding: 80px 20px;
background: var(--bg-white);
width: 100%;
}
.container {
max-width: 1800px;
margin: 0 auto;
width: 100%;
}
/* GALLERY HEADER */
.gallery-header {
text-align: center;
margin-bottom: 60px;
animation: fadeInDown 0.8s ease-out;
}
.gallery-title {
font-size: clamp(2.5rem, 6vw, 4rem);
font-weight: 800;
color: var(--text-dark);
margin-bottom: 1rem;
line-height: 1.2;
letter-spacing: -1px;
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
}
.gallery-subtitle {
font-size: 1.2rem;
color: var(--text-gray);
line-height: 1.8;
max-width: 700px;
margin: 0 auto;
}
/* ============================================
GALLERY SLIDER SECTION
============================================ */
.gallery-slider-wrapper {
position: relative;
overflow: hidden;
margin: 40px 0;
width: 100%;
}
.gallery-slider-track {
display: flex;
gap: 20px;
transition: transform 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
will-change: transform;
width: 100%;
padding: 20px;
}
.gallery-slider-item {
flex: 0 0 calc(33.333% - 14px);
min-width: calc(33.333% - 14px);
min-height: 400px;
}
.gallery-item-premium {
position: relative;
overflow: hidden;
border-radius: 12px;
box-shadow: 0 4px 15px rgba(45, 166, 168, 0.1);
transition: all 0.3s ease;
cursor: pointer;
flex-shrink: 0;  /* Previne compression pe mobile */
    min-width: auto;
width: 100%;
height: 100%;
}
.gallery-item-premium:hover {
transform: translateY(-8px);
box-shadow: 0 12px 30px rgba(45, 166, 168, 0.25);
}
/* GALLERY IMAGE CONTAINER */
.gallery-image-container {
position: relative;
width: 100%;
height: 100%;
overflow: hidden;
background: white;
}
.gallery-image-container img {
width: 100%;
height: 100%;
object-fit: contain;
transition: transform 0.4s ease;
display: block;
}
.gallery-item-premium:hover .gallery-image-container img {
transform: scale(1.08);
}
/* GALLERY OVERLAY */
.gallery-overlay-premium {
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
background: linear-gradient(to top, 
rgba(45, 166, 168, 0.95) 0%,
rgba(45, 166, 168, 0.6) 40%,
transparent 100%);
opacity: 0;
transition: opacity 0.3s ease;
display: flex;
flex-direction: column;
justify-content: flex-end;
padding: 24px;
z-index: 5;
}
.gallery-item-premium:hover .gallery-overlay-premium {
opacity: 1;
}
.overlay-content h4 {
color: white;
font-size: 1.2rem;
margin-bottom: 0.5rem;
font-weight: 700;
}
.overlay-content p {
color: rgba(255, 255, 255, 0.9);
font-size: 0.9rem;
margin: 0;
}
.overlay-actions {
display: flex;
align-items: center;
justify-content: space-between;
gap: 12px;
margin-top: 12px;
}
.zoom-btn {
width: 44px;
height: 44px;
border-radius: 50%;
background: rgba(255, 255, 255, 0.2);
border: 2px solid white;
color: white;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s ease;
}
.zoom-btn:hover {
background: white;
color: var(--primary-teal);
transform: scale(1.1);
}
.category-tag {
background: rgba(255, 255, 255, 0.25);
color: white;
padding: 6px 12px;
border-radius: 50px;
font-size: 0.8rem;
font-weight: 600;
}
/* ============================================
SLIDER CONTROLS
============================================ */
.slider-controls {
display: flex;
align-items: center;
justify-content: center;
gap: 20px;
margin-top: 30px;
flex-wrap: wrap;
}
.slider-btn {
width: 50px;
height: 50px;
border-radius: 50%;
background: var(--primary-teal);
color: white;
border: none;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
transition: all 0.3s ease;
font-size: 1.5rem;
}
.slider-btn:hover {
transform: scale(1.1);
box-shadow: 0 8px 20px rgba(45, 166, 168, 0.3);
}
.slider-btn:active {
transform: scale(0.95);
}
.slider-dots {
display: flex;
gap: 10px;
justify-content: center;
flex-wrap: wrap;
}
.slider-dot {
width: 12px;
height: 12px;
border-radius: 50%;
background: rgba(45, 166, 168, 0.3);
border: none;
cursor: pointer;
transition: all 0.3s ease;
}
.slider-dot:hover {
background: rgba(45, 166, 168, 0.6);
}
.slider-dot.active {
background: var(--primary-teal);
width: 30px;
border-radius: 6px;
}
.slider-info {
text-align: center;
margin-top: 20px;
color: var(--text-gray);
font-size: 0.95rem;
font-weight: 500;
}
/* ============================================
IMAGE MODAL
============================================ */
#gallery-modal {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 9999;
display: flex;
align-items: center;
justify-content: center;
opacity: 0;
pointer-events: none;
transition: opacity 0.3s ease;
}
#gallery-modal.active {
opacity: 1;
pointer-events: auto;
}
.modal-overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(0, 0, 0, 0.85);
cursor: pointer;
}
.modal-content {
position: relative;
z-index: 10000;
background: white;
border-radius: 15px;
overflow: hidden;
max-width: 90vw;
max-height: 90vh;
display: flex;
flex-direction: column;
box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
animation: modalSlideIn 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
}
@keyframes modalSlideIn {
from {
transform: scale(0.9);
opacity: 0;
}
to {
transform: scale(1);
opacity: 1;
}
}
.modal-image-container {
flex: 1;
overflow: hidden;
display: flex;
align-items: center;
justify-content: center;
background: var(--bg-light);
min-height: 300px;
}
.modal-image-container img {
max-width: 100%;
max-height: 100%;
object-fit: contain;
display: block;
}
.modal-close {
position: absolute;
top: 15px;
right: 15px;
width: 40px;
height: 40px;
border: none;
background: rgba(255, 255, 255, 0.9);
color: var(--text-dark);
font-size: 28px;
cursor: pointer;
border-radius: 50%;
display: flex;
align-items: center;
justify-content: center;
z-index: 10001;
transition: all 0.3s ease;
box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.modal-close:hover {
background: white;
transform: rotate(90deg);
box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}
/* ============================================
ANIMATIONS
============================================ */
@keyframes fadeInDown {
from {
opacity: 0;
transform: translateY(-30px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
/* ===== RESPONSIVE ===== */
@media (max-width: 768px) {
/* ===== PULSE ANIMATION ===== */
@keyframes pulse {
0%, 100% {
transform: scale(1);
}
50% {
transform: scale(1.15);
}
}
/* ===== RESPONSIVE ===== */
@media (max-width: 1024px) {
.gallery-masonry {
grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
gap: 18px;
}
.gallery-item-premium {
min-height: 250px;
}
}
@media (max-width: 768px) {
.gallery-section {
padding: 40px 0;
}
.section-header h2 {
font-size: 2rem;
}
.gallery-masonry {
grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
gap: 15px;
}
.gallery-tall {
grid-row: span 1;
}
.gallery-item-premium {
    flex-shrink: 0;  /* Previne compression pe mobile */
    min-width: auto;
min-height: 200px;
border-radius: 8px;
}
.overlay-content h4 {
font-size: 1rem;
}
.zoom-btn {
width: 40px;
height: 40px;
}
.modal-close {
top: 10px;
color: #000;
font-size: 2rem;
background: rgba(255, 255, 255, 0.8);
border-radius: 50%;
width: 40px;
height: 40px;
display: flex;
align-items: center;
justify-content: center;
}
}
@media (max-width: 480px) {
.section-header h2 {
font-size: 1.5rem;
margin-bottom: 10px;
}
.gallery-masonry {
grid-template-columns: repeat(2, 1fr);
gap: 12px;
}
.gallery-item-premium {
min-height: 150px;
}
.overlay-actions {
gap: 8px;
}
.zoom-btn {
width: 36px;
height: 36px;
}
.category-tag {
font-size: 0.7rem;
padding: 6px 12px;
}
}
/* Testimonials Section */
.testimonials-section-premium {
background: var(--bg-white);
padding: 5rem 0;
}
.testimonials-container {
display: flex;
gap: 2rem;
overflow: hidden;
}
.testimonial-card-premium {
background: #fff;
border-radius: 16px;
padding: 2rem;
box-shadow: 0 4px 12px rgba(0,0,0,0.08);
max-width: 500px;
margin: 0 auto;
transition: transform 0.3s ease;
}
.testimonial-card-premium:hover {
transform: translateY(-4px);
box-shadow: 0 8px 24px rgba(0,0,0,0.15);
}
.testimonial-header {
display: flex;
align-items: center;
justify-content: space-between;
margin-bottom: 1rem;
}
.testimonial-stars .star {
width: 20px;
height: 20px;
color: #ccc;
}
.testimonial-stars .star.filled {
color: #f5c518;
}
.testimonial-package {
background: var(--bg-light);
color: var(--primary-teal);
font-size: 0.8rem;
padding: 0.2rem 0.5rem;
border-radius: 4px;
}
.testimonial-text {
font-size: 1.1rem;
line-height: 1.6;
color: var(--text-dark);
font-style: italic;
}
.testimonial-author {
display: flex;
align-items: center;
justify-content: space-between;
margin-top: 1.5rem;
}
.author-info .author-name {
font-weight: 700;
color: var(--text-dark);
}
.author-info .author-location {
font-size: 0.9rem;
color: var(--text-gray);
}
.testimonial-avatar {
width: 40px;
height: 40px;
color: var(--primary-teal);
}
.testimonial-avatar svg {
width: 100%;
height: 100%;
}
.carousel-controls {
display: flex;
align-items: center;
justify-content: center;
margin-top: 2rem;
}
.carousel-btn {
background: none;
border: none;
color: var(--primary-teal);
cursor: pointer;
padding: 0.5rem;
}
.carousel-btn:hover {
color: var(--teal-dark);
}
.carousel-dots {
display: flex;
gap: 0.5rem;
margin: 0 1rem;
}
.carousel-dots .dot {
width: 8px;
height: 8px;
border-radius: 50%;
background: var(--text-gray);
display: inline-block;
}
.carousel-dots .dot.active {
background: var(--primary-teal);
}
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
.info-icon i {
font-family: 'Font Awesome 6 Free' !important;
font-weight: 900 !important;
display: inline-block;
}
.info-icon .fas {
font-style: normal !important;
font-variant: normal !important;
text-rendering: auto !important;
-webkit-font-smoothing: antialiased !important;
}
/* ===== CONTACT SECTION ===== */
.contact-section {
padding: 100px 20px;
background: #ffffff;
width: 100%;
}
.contact-container {
max-width: 1200px;
margin: 0 auto;
display: grid !important;
grid-template-columns: 1.2fr 1fr!important;
gap: 80px;
align-items: flex-start!important;
}
/* ===== LEFT SIDE - TEXT ===== */
.contact-left {
display: flex;
flex-direction: column;
}
.contact-label {
color: #2da6a8;
font-size: 0.9rem;
font-weight: 700;
text-transform: uppercase;
letter-spacing: 2px;
margin-bottom: 15px;
}
.contact-title {
font-size: 3.5rem;
font-weight: 700;
line-height: 1.2;
margin-bottom: 25px;
color: #000;
}
.contact-title .accent {
color: #2da6a8;
}
.contact-desc {
font-size: 1.1rem;
line-height: 1.7;
color: #666;
margin-bottom: 50px;
}
.contact-info {
display: flex;
flex-direction: column;
gap: 25px;
}
.info-item {
display: flex;
align-items: center;
gap: 20px;
}
.info-icon {
color: #2da6a8;
font-size: 1.3rem;
width: 30px;
display: flex;
align-items: center;
justify-content: center;
}
.info-text {
font-size: 1.05rem;
font-weight: 500;
color: #333;
}
/* ===== RIGHT SIDE - FORM ===== */
.contact-right {
display: flex;
justify-content: center;
}
.contact-form-box {
background: #ffffff;
padding: 50px;
border-radius: 20px;
box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
border: 1px solid rgba(45, 166, 168, 0.12);
width: 100%;
max-width: 550px;
}
.form-group {
margin-bottom: 24px;
}
.form-input,
.form-select,
.form-textarea {
width: 100%;
padding: 16px 20px;
border-radius: 12px;
border: 1.5px solid #e8e8e8;
background: #fafafa;
font-family: inherit;
font-size: 1rem;
color: #333;
transition: all 0.3s ease;
}
.form-input::placeholder,
.form-select,
.form-textarea::placeholder {
color: #aaa;
}
.form-input:focus,
.form-select:focus,
.form-textarea:focus {
outline: none;
border-color: #2da6a8;
background: #fff;
box-shadow: 0 10px 30px rgba(45, 166, 168, 0.15);
}
.form-textarea {
resize: vertical;
font-family: inherit;
min-height: 120px;
}
.form-select {
cursor: pointer;
appearance: none;
background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath fill='%232da6a8' d='M1 1l5 5 5-5'/%3E%3C/svg%3E");
background-repeat: no-repeat;
background-position: right 18px center;
background-size: 14px;
padding-right: 45px;
}
.submit-btn {
width: 100%;
padding: 16px 32px;
background: #2da6a8;
color: white;
border: none;
border-radius: 12px;
font-size: 1rem;
font-weight: 600;
cursor: pointer;
display: flex;
align-items: center;
justify-content: center;
gap: 10px;
transition: all 0.3s ease;
margin-top: 15px;
}
.submit-btn:hover {
background: #208a8f;
box-shadow: 0 15px 40px rgba(45, 166, 168, 0.25);
transform: translateY(-2px);
}
.submit-btn:active {
transform: translateY(0);
}
.submit-btn i {
font-size: 0.9rem;
}
/* Final CTA Section */
.final-cta-section {
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%);
padding: 5rem 0;
text-align: center;
color: #fff;
}
.final-cta-section h2 {
color: #fff;
margin-bottom: 1rem;
}
.final-cta-section p {
color: rgba(255,255,255,0.9);
font-size: 1.1rem;
margin-bottom: 2rem;
}
.final-cta-buttons .cta-primary {
background: #fff;
color: var(--primary-teal);
}
.final-cta-buttons .cta-primary:hover {
background: var(--bg-light);
}
.final-cta-buttons .cta-secondary {
border-color: #fff;
color: #fff;
}
.final-cta-buttons .cta-secondary:hover {
background: #fff;
color: var(--primary-teal);
}
.trust-indicators {
display: flex;
justify-content: center;
gap: 2rem;
flex-wrap: wrap;
margin-top: 2rem;
}
.trust-item {
display: flex;
align-items: center;
gap: 0.5rem;
color: #fff;
font-size: 0.95rem;
}
.trust-item svg {
width: 20px;
height: 20px;
color: #fff;
}
@media (max-width: 1024px) {
.hero-section-premium {
overflow: visible;
padding: 40px 0 80px 0;
margin-top: 20px; /* ✅ GAP ADĂUGAT: 20px de sus */
}
.hero-content-premium {
grid-template-columns: 1fr 1.2fr;
gap: 2.5rem;
padding: 0 2rem;
overflow: visible;
}
.showcase-grid {
grid-template-columns: 1.5fr 1fr;
grid-template-rows: 280px 280px;
gap: 1.2rem;
}
.showcase-item {
padding: 15px;
}
.showcase-large {
padding: 20px;
}
.hero-scroll-indicator {
bottom: 55px; /* Mai sus pe tablet */
}
.scroll-line {
height: 35px;
}
.scroll-text {
font-size: 0.65rem;
letter-spacing: 1.5px;
}
.packages-section-premium {
padding: 80px 20px;
}
.packages-grid-premium {
gap: 2rem;
}
.package-featured {
transform: scale(1);
}
.package-featured:hover {
transform: translateY(-12px) scale(1);
}
}
/* Responsive (Mobile) Adjustments */
@media (max-width: 768px) {
.hero-section-premium {
overflow: visible;
padding: 40px 0 80px 0;
margin-top: 40px; /* ✅ GAP ADĂUGAT: 20px de sus */
}
.hero-content-premium {
grid-template-columns: 1fr !important;
gap: 3rem;
overflow: visible;
text-align: center;
padding: 0 1.5rem;
margin-top: 40px;
}
.hero-stats {
gap: 1.5rem;
margin-bottom: 2rem;
}
.stat-number {
font-size: 2rem;
}
.stat-label {
font-size: 0.8rem;
}
.stat-item::before {
display: none; /* Hide decorative line on mobile */
}
.hero-cta-container {
flex-direction: column;
align-items: center;
}
.cta-primary, 
.cta-secondary {
width: 100%;
max-width: 300px;
justify-content: center;
}
.showcase-grid {
grid-template-columns: 1fr; /* 1 coloană */
grid-template-rows: auto; /* Auto heights */
gap: 1rem;
width: 100%;
}
.showcase-item {
border-radius: 16px;
padding: 12px;
min-height: 280px; /* Minimum height pentru proporții */
}
.showcase-large {
grid-row: span 1; /* Normal, nu span 2 */
padding: 15px;
}
.showcase-item img {
object-fit: contain;
object-position: center;
}
.showcase-large img {
object-position: center 50%;
}
}
.benefits-premium {
grid-template-columns: 1fr !important;
}
.timeline-line {
display: none;
}
.process-step-premium {
margin-left: 0 !important;
}
.step-marker {
margin-right: 0.5rem !important;
}
.contact-content-premium {
grid-template-columns: 1fr !important;
}
.hero-scroll-indicator {
bottom: 50px;
opacity: 0.7; /* Puțin mai transparent pe mobile */
}
.scroll-line {
height: 30px;
width: 1.5px;
}
.scroll-text {
font-size: 0.65rem;
letter-spacing: 1px;
}
.packages-section-premium {
padding: 60px 15px;
}
.pricing-cards-grid {
display: flex;
flex-wrap: nowrap;
overflow-x: auto;
overflow-y: hidden;
gap: 1.5rem;
padding: 0 15px;
margin: -15px 0 2rem -15px;
scroll-behavior: smooth;
-webkit-overflow-scrolling: touch; /* Smooth scroll pe iOS */
/* Hide scrollbar but keep functionality */
-ms-overflow-style: none;  /* IE and Edge */
scrollbar-width: none; /* Firefox */
}
.pricing-cards-grid::-webkit-scrollbar {
display: none; /* Chrome, Safari and Opera */
}
.pricing-card {
flex: 0 0 calc(100vw - 60px);
min-width: calc(100vw - 60px);
max-width: calc(100vw - 60px);
}
.section-title-premium {
font-size: 2rem;
}
.package-card-premium {
padding: 30px;
}
.package-price {
font-size: 3rem;
}
.package-name {
font-size: 1.5rem;
}
/* Performance optimizations */
.hero-animated-background *, .showcase-item * {
will-change: transform, opacity;
}
@media (max-width: 480px) {
.hero-section-premium {
overflow: visible;
padding: 40px 0 80px 0;
margin-top: 20px; /* ✅ GAP ADĂUGAT: 20px de sus */
}
.showcase-grid {
grid-template-columns: 1fr;
grid-template-rows: auto;
gap: 0.8rem;
padding: 0 10px;
}
.showcase-item {
border-radius: 12px;
padding: 10px;
min-height: 240px; /* Puțin mai mic pe telefoane foarte mici */
}
.showcase-item img {
object-fit: cover; /* Cover în loc de contain pentru mai puțin spațiu alb */
}
.hero-scroll-indicator {
bottom: -25px;
opacity: 0.6; /* Mai transparent pe telefone mici */
}
.scroll-line {
height: 25px;
}
.scroll-text {
font-size: 0.6rem;
letter-spacing: 0.8px;
}
.packages-section-premium {
padding: 50px 12px;
}
.section-title-premium {
font-size: 1.6rem;
}
.package-card-premium {
padding: 25px;
}
.package-price {
font-size: 2.5rem;
}
.pricing-cards-grid {
gap: 1.2rem;
padding: 0 12px;
margin: -12px 0 2rem -12px;
}
.pricing-card {
flex: 0 0 calc(100vw - 50px);
min-width: calc(100vw - 50px);
max-width: calc(100vw - 50px);
}
.package-name {
font-size: 1.3rem;
}
.packages-note {
flex-direction: column;
text-align: center;
font-size: 0.85rem;
}
}
@media (prefers-reduced-motion: reduce) {
*, *::before, *::after {
animation-duration: 0.01ms !important;
animation-iteration-count: 1 !important;
}
}
.hero-section-premium {
background: linear-gradient(135deg, #ffffff 0%, #f0fafb 25%, #ffffff 50%, #e6f5f6 75%, #ffffff 100%) !important;
background-size: 400% 400% !important;
animation: bgGradient 20s ease infinite !important;
}
@keyframes bgGradient {
0% { background-position: 0% 50%; }
50% { background-position: 100% 50%; }
100% { background-position: 0% 50%; }
}
.hero-overlay {
background: 
radial-gradient(circle 300px at 20% 30%, rgba(45, 166, 168, 0.25) 0%, transparent 50%),
radial-gradient(circle 250px at 80% 70%, rgba(61, 196, 198, 0.2) 0%, transparent 50%),
radial-gradient(circle 350px at 50% 50%, rgba(45, 166, 168, 0.1) 0%, transparent 70%),
radial-gradient(circle 280px at 30% 80%, rgba(61, 196, 198, 0.15) 0%, transparent 50%) !important;
animation: bgShift 25s ease infinite !important;
}
@keyframes bgShift {
0% { transform: translate(0, 0); }
25% { transform: translate(30px, -30px); }
50% { transform: translate(-20px, 20px); }
75% { transform: translate(20px, -20px); }
100% { transform: translate(0, 0); }
}
.hero-iris-circles {
z-index: 2 !important;
}
.iris-circle {
background: radial-gradient(circle at 30% 30%, rgba(61, 196, 198, 0.35), rgba(45, 166, 168, 0.05)) !important;
filter: blur(60px) !important;
}
.iris-circle-1 {
animation: move1 30s infinite ease-in-out !important;
}
.iris-circle-2 {
animation: move2 35s infinite ease-in-out !important;
}
.iris-circle-3 {
animation: move3 32s infinite ease-in-out !important;
}
.iris-circle-4 {
animation: move4 28s infinite ease-in-out !important;
}
@keyframes move1 {
0%, 100% { transform: translate(0, 0) rotate(0deg); }
50% { transform: translate(100px, -100px) rotate(180deg); }
}
@keyframes move2 {
0%, 100% { transform: translate(0, 0) rotate(0deg); }
50% { transform: translate(-80px, 80px) rotate(180deg); }
}
@keyframes move3 {
0%, 100% { transform: translate(0, 0) rotate(0deg); }
50% { transform: translate(80px, 100px) rotate(180deg); }
}
@keyframes move4 {
0%, 100% { transform: translate(0, 0) rotate(0deg); }
50% { transform: translate(-100px, -80px) rotate(180deg); }
}
.hero-sparkles {
position: absolute !important;
top: 0 !important;
left: 0 !important;
width: 100% !important;
height: 100% !important;
z-index: 3 !important;
pointer-events: none !important;
overflow: hidden !important;
}
/* Punctul 1 */
.sparkle-1 { position: absolute; width: 3px; height: 3px; background: rgba(61, 196, 198, 0.7); border-radius: 50%; left: 10%; top: 20%; box-shadow: 0 0 8px rgba(61, 196, 198, 0.8); animation: float-random-1 8s infinite ease-in-out; }
/* Punctul 2 */
.sparkle-2 { position: absolute; width: 2px; height: 2px; background: rgba(45, 166, 168, 0.6); border-radius: 50%; left: 20%; top: 30%; box-shadow: 0 0 6px rgba(45, 166, 168, 0.7); animation: float-random-2 10s infinite ease-in-out; }
/* Punctul 3 */
.sparkle-3 { position: absolute; width: 2.5px; height: 2.5px; background: rgba(61, 196, 198, 0.5); border-radius: 50%; left: 50%; top: 60%; box-shadow: 0 0 7px rgba(61, 196, 198, 0.6); animation: float-random-3 12s infinite ease-in-out; }
/* Punctul 4 */
.sparkle-4 { position: absolute; width: 2px; height: 2px; background: rgba(45, 166, 168, 0.8); border-radius: 50%; left: 80%; top: 10%; box-shadow: 0 0 6px rgba(45, 166, 168, 0.9); animation: float-random-4 9s infinite ease-in-out; }
/* Punctul 5 */
.sparkle-5 { position: absolute; width: 3px; height: 3px; background: rgba(61, 196, 198, 0.6); border-radius: 50%; left: 30%; top: 70%; box-shadow: 0 0 8px rgba(61, 196, 198, 0.7); animation: float-random-5 11s infinite ease-in-out; }
/* Punctul 6 */
.sparkle-6 { position: absolute; width: 1.5px; height: 1.5px; background: rgba(45, 166, 168, 0.7); border-radius: 50%; left: 70%; top: 80%; box-shadow: 0 0 5px rgba(45, 166, 168, 0.8); animation: float-random-6 13s infinite ease-in-out; }
/* Punctul 7 */
.sparkle-7 { position: absolute; width: 2px; height: 2px; background: rgba(61, 196, 198, 0.5); border-radius: 50%; left: 15%; top: 50%; box-shadow: 0 0 6px rgba(61, 196, 198, 0.6); animation: float-random-7 10s infinite ease-in-out; }
/* Punctul 8 */
.sparkle-8 { position: absolute; width: 2.5px; height: 2.5px; background: rgba(45, 166, 168, 0.6); border-radius: 50%; left: 85%; top: 40%; box-shadow: 0 0 7px rgba(45, 166, 168, 0.7); animation: float-random-8 12s infinite ease-in-out; }
/* Random movement animations */
@keyframes float-random-1 { 0% { transform: translate(0, 0); } 25% { transform: translate(30px, -40px); } 50% { transform: translate(-20px, 20px); } 75% { transform: translate(40px, 30px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-2 { 0% { transform: translate(0, 0); } 25% { transform: translate(-50px, 30px); } 50% { transform: translate(40px, -50px); } 75% { transform: translate(-30px, -20px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-3 { 0% { transform: translate(0, 0); } 25% { transform: translate(20px, 50px); } 50% { transform: translate(-40px, -30px); } 75% { transform: translate(35px, -50px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-4 { 0% { transform: translate(0, 0); } 25% { transform: translate(-40px, -30px); } 50% { transform: translate(50px, 40px); } 75% { transform: translate(-25px, 30px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-5 { 0% { transform: translate(0, 0); } 25% { transform: translate(35px, 45px); } 50% { transform: translate(-50px, -35px); } 75% { transform: translate(45px, -40px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-6 { 0% { transform: translate(0, 0); } 25% { transform: translate(-30px, 35px); } 50% { transform: translate(45px, -45px); } 75% { transform: translate(-40px, -30px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-7 { 0% { transform: translate(0, 0); } 25% { transform: translate(40px, -50px); } 50% { transform: translate(-35px, 40px); } 75% { transform: translate(30px, 50px); } 100% { transform: translate(0, 0); } }
@keyframes float-random-8 { 0% { transform: translate(0, 0); } 25% { transform: translate(-45px, -40px); } 50% { transform: translate(50px, 45px); } 75% { transform: translate(-50px, 35px); } 100% { transform: translate(0, 0); } }
/* Twinkle effect */
@keyframes twinkle { 0%, 100% { opacity: 0.3; } 50% { opacity: 0.9; } }
.sparkle-1, .sparkle-2, .sparkle-3, .sparkle-4, .sparkle-5, .sparkle-6, .sparkle-7, .sparkle-8 {
animation-fill-mode: infinite;
}
</style>
<main id="main" class="site-main">
<!-- Hero Section cu Video Background și Paralax -->
<section class="hero-section-premium">
<div class="hero-overlay"></div>
<div class="hero-iris-circles">
<div class="iris-circle iris-circle-1"></div>
<div class="iris-circle iris-circle-2"></div>
<div class="iris-circle iris-circle-3"></div>
<div class="iris-circle iris-circle-4"></div>
</div>
<div class="hero-sparkles">
<div class="sparkle-1"></div>
<div class="sparkle-2"></div>
<div class="sparkle-3"></div>
<div class="sparkle-4"></div>
<div class="sparkle-5"></div>
<div class="sparkle-6"></div>
<div class="sparkle-7"></div>
<div class="sparkle-8"></div>
</div>
<div class="hero-content-premium">
<div class="hero-text-container">
<span class="hero-subtitle">Studio de Fotografie • Buzău</span>
<h1 class="hero-title-premium">
<span class="title-line">Universul</span>
<span class="title-line-accent">din ochii</span>
<span class="title-line">tăi</span>
</h1>
<p class="hero-description">
Descoperă arta unică din privirea ta. 
<br>Studio de fotografie Buzău! <br>Fotografie profesională de iris! <br>Transformă-ți irisul într-un tablou superb! 
</p>
</div>
<div class="hero-image-showcase">
<div class="showcase-grid">
<div class="showcase-item showcase-large">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ape-si-ad.jpg" alt="Iris Photography Art" loading="eager">
<div class="showcase-overlay">
<span class="showcase-label">Efect Apă Dual </span>
</div>
</div>
<div class="showcase-item">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iris-hero-1.jpg" alt="Macro Iris Detail" loading="eager">
<div class="showcase-overlay">
<span class="showcase-label">Efect Fumuri</span>
</div>
</div>
<div class="showcase-item">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iris-hero-apa-solo.jpg" alt="Water Effect Iris" loading="eager">
<div class="showcase-overlay">
<span class="showcase-label">Efect Apă </span>
</div>
</div>
</div>
</div>
<div class="hero-cta-container">
<a href="#contact" class="cta-primary">
<span>Rezervă Ședința</span>
<svg class="cta-arrow" width="20" height="20" viewBox="0 0 20 20" fill="none">
<path d="M4.16663 10H15.8333M15.8333 10L10.8333 5M15.8333 10L10.8333 15" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
</a>
<a href="#galerie" class="cta-secondary">
<svg class="play-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M8 5V19L19 12L8 5Z" fill="currentColor"/>
</svg>
<span>Vezi Galeria</span>
</a>
</div>
</div>
</section>
<!-- About Section with Stacked Image Cards -->
<section id="despre-noi" class="transition-section-premium">
<div class="transition-bg-layer transition-bg-1"></div>
<div class="transition-bg-layer transition-bg-2"></div>
<div class="transition-container">
<!-- Left side - Text content -->
<div class="transition-content-left">
<h2 class="transition-main-heading">
Artă. <br>
<span class="gradient-text">Știință. Emoție.</span>
</h2>
<p class="transition-description">
Combinăm tehnologia macro de ultimă generație cu sensibilitatea artistică pentru a crea opere de artă din ochii tăi.
</p>
<!-- Stats row -->
<div class="transition-stats">
<div class="transition-stat">
<span class="stat-number">10+</span>
<span class="stat-text">Ani Experiență</span>
</div>
<div class="transition-stat">
<span class="stat-number">4K+</span>
<span class="stat-text">Imagini Premium</span>
</div>
<div class="transition-stat">
<span class="stat-number">100%</span>
<span class="stat-text">Satisfacție</span>
</div>
</div>
</div>
<!-- Right side - Stacked Image Cards -->
<div class="transition-visual-right">
<div class="stacked-cards">
<!-- Card 1 - Back LEFT -->
<div class="card card-1">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ape-in-X.jpg" alt="Iris Foto Studio - Professional macro setup" class="card-image" loading="lazy">
</div>
<!-- Card 3 - Back RIGHT -->
<div class="card card-3">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/dia-st.jpg" alt="Iris macro photography - Detail 1" class="card-image" loading="lazy">
</div>
<!-- Card 2 - FRONT CENTER (PRIMARY) -->
<div class="card card-2">
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/iris-main.jpg" alt="Iris macro photography - Detail 2" class="card-image" loading="lazy">
</div>
</div>
</div>
</section>
<!-- ===== ABOUT IRIS PREMIUM SECTION ===== -->
<section id="servicii" class="about-iris-premium">
<!-- Background animated elements -->
<div class="about-bg-circle about-bg-1"></div>
<div class="about-bg-circle about-bg-2"></div>
<div class="about-container">
<!-- Header -->
<div class="about-header">
<h2 class="about-title">
<span class="gradient-iris">Studio de fotografie Iris</span>
</h2>
<p class="about-subtitle">
De la captura perfectă <br> la opera de artă <br> 4 pași de pasiune și profesionalism
</p>
</div>
<!-- Process pași -->
<div class="proces-pasi">
<!-- Pas 1 - Fotografat -->
<div class="proces-pas pas-1" data-pas="1">
<div>
<div class="pas-numar">01</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/step-1-fotograf.jpg" class="pas-icon" alt="Fotografat">
<h3 class="pas-titlu">Fotografiat</h3>
</div>
<p class="pas-descriere">
Capturăm esența ochilor tăi <br> cu tehnologie fotografică <br> macro de ultimă generație.
</p>
<div class="pas-linie"></div>
</div>
<!-- Pas 2 - Editat -->
<div class="proces-pas pas-2" data-pas="2">
<div>
<div class="pas-numar">02</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/step-2-editat.jpg" class="pas-icon" alt="Editat">
<h3 class="pas-titlu">Editat</h3>
</div>
<p class="pas-descriere">
Post-procesare profesională <br> în Photoshop<br>cu ajustări fine și efecte de impact.
</p>
<div class="pas-linie"></div>
</div>
<!-- Pas 3 - Printat -->
<div class="proces-pas pas-3" data-pas="3">
<div>
<div class="pas-numar">03</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/step-3-printat.jpg" class="pas-icon" alt="Printat">
<h3 class="pas-titlu">Printat</h3>
</div>
<p class="pas-descriere">
Printare pe materiale premium.<br>Calitate superioară garantată.
</p>
<div class="pas-linie"></div>
</div>
<!-- Pas 4 - Tablou -->
<div class="proces-pas pas-4" data-pas="4">
<div>
<div class="pas-numar">04</div>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/step-4-tablou.jpg" class="pas-icon" alt="Tablou">
<h3 class="pas-titlu">Înrămat</h3>
</div>
<p class="pas-descriere">
Gata pentru perete.<br>Operă de artă pentru galeria ta.
</p>
<div class="pas-linie"></div>
</div>
</div>
<!-- Proces progress bar -->
<div class="proces-progres">
<div class="progres-bara"></div>
</div>
</div>
</section>
<section class="pricing-section-premium">
<div class="container">
<div class="pricing-header">
<span class="pricing-subtitle">Servicii & Prețuri</span>
<h2 class="pricing-title">Alege serviciul</h2>
<p class="pricing-description">Prețuri transparente pentru fiecare tip de ședință. <br>Consultați galeria pentru mai multe detalii</p>
</div>
<div class="pricing-categories">
<!-- UN SINGUR IRIS -->
<div class="pricing-category">
<h3 class="category-title">Un singur iris</h3>
<div class="pricing-slider-controls">
<!-- Left Arrow -->
<button class="pricing-slider-arrow pricing-slider-arrow-prev" aria-label="Previous slide">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<polyline points="15 18 9 12 15 6"></polyline>
</svg>
</button>
<div class="pricing-slider-dots"></div>
<!-- Right Arrow -->
<button class="pricing-slider-arrow pricing-slider-arrow-next" aria-label="Next slide">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<polyline points="9 18 15 12 9 6"></polyline>
</svg>
</button>
</div>
<div class="pricing-cards-grid">
<!-- A1 -->
<div class="pricing-card">
<div class="pricing-card-header">
<div class="tier-badge">A1</div>
<h4 class="tier-name">Efecte Subtile Natural</h4>
<p class="tier-description">Fotografie naturală cu mici ajustări artistice</p>
</div>
<div class="pricing-breakdown">
<div class="breakdown-row">
<span class="breakdown-label">Fotografiere/Editare:</span>
<span class="breakdown-value">90 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Foto 30/40:</span>
<span class="breakdown-value">20 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Rama:</span>
<span class="breakdown-value">30 RON</span>
</div>
<div class="breakdown-row separator">
<span class="breakdown-label">Total 1:</span>
<span class="breakdown-value-total">110 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Total 2:</span>
<span class="breakdown-value-total">140 RON</span>
</div>
</div>
<div class="features-section">
<h5 class="features-title">Include:</h5>
<ul class="features-list">
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fotografie macro HD</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Editare manuală de artist</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fișier digital 4K</span>
</li>
</ul>
</div>
<button class="cta-button">Selectează A1</button>
</div>
<!-- B1 -->
<div class="pricing-card">
<div class="popular-badge"><span>⭐ Recomandat</span></div>
<div class="pricing-card-header">
<div class="tier-badge">B1</div>
<h4 class="tier-name">Efecte Premium</h4>
<p class="tier-description">Efect artistic moderat cu culori pline</p>
</div>
<div class="pricing-breakdown">
<div class="breakdown-row">
<span class="breakdown-label">Fotografiere/Editare:</span>
<span class="breakdown-value">100 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Foto 30/40:</span>
<span class="breakdown-value">20 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Rama:</span>
<span class="breakdown-value">30 RON</span>
</div>
<div class="breakdown-row separator">
<span class="breakdown-label">Total 1:</span>
<span class="breakdown-value-total">120 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Total 2:</span>
<span class="breakdown-value-total">150 RON</span>
</div>
</div>
<div class="features-section">
<h5 class="features-title">Include:</h5>
<ul class="features-list">
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fotografie macro 4K</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Editare avansată + efecte</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fișier digital 8K</span>
</li>
</ul>
</div>
<button class="cta-button">Selectează B1</button>
</div>
<!-- C1 -->
<div class="pricing-card">
<div class="pricing-card-header">
<div class="tier-badge">C1</div>
<h4 class="tier-name">Efect Galaxy </h4>
<p class="tier-description">Transformare cu efecte cosmo-futuriste</p>
</div>
<div class="pricing-breakdown">
<div class="breakdown-row">
<span class="breakdown-label">Fotografiere/Editare:</span>
<span class="breakdown-value">110 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Foto 30/40:</span>
<span class="breakdown-value">20 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Rama:</span>
<span class="breakdown-value">30 RON</span>
</div>
<div class="breakdown-row separator">
<span class="breakdown-label">Total 1:</span>
<span class="breakdown-value-total">130 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Total 2:</span>
<span class="breakdown-value-total">160 RON</span>
</div>
</div>
<div class="features-section">
<h5 class="features-title">Include:</h5>
<ul class="features-list">
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fotografie macro Ultra HD</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Editare artistică premium</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Efect cosmic galaxy</span>
</li>
</ul>
</div>
<button class="cta-button">Selectează C1</button>
</div>
</div>
</div>
<!-- DOI IRISI -->
<div class="pricing-category">
<h3 class="category-title">Doi irisi</h3>
<div class="pricing-slider-controls">
<!-- Left Arrow -->
<button class="pricing-slider-arrow pricing-slider-arrow-prev" aria-label="Previous slide">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<polyline points="15 18 9 12 15 6"></polyline>
</svg>
</button>
<div class="pricing-slider-dots"></div>
<!-- Right Arrow -->
<button class="pricing-slider-arrow pricing-slider-arrow-next" aria-label="Next slide">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<polyline points="9 18 15 12 9 6"></polyline>
</svg>
</button>
</div>
<div class="pricing-cards-grid">
<!-- A2 -->
<div class="pricing-card">
<div class="pricing-card-header">
<div class="tier-badge">A2</div>
<h4 class="tier-name">Efecte Subtile Natural</h4>
<p class="tier-description">Fotografie naturală a ambilor ochi cu ajustări</p>
</div>
<div class="pricing-breakdown">
<div class="breakdown-row">
<span class="breakdown-label">Fotografiere/Editare:</span>
<span class="breakdown-value">110 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Foto 30/40:</span>
<span class="breakdown-value">20 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Rama:</span>
<span class="breakdown-value">30 RON</span>
</div>
<div class="breakdown-row separator">
<span class="breakdown-label">Total 1:</span>
<span class="breakdown-value-total">130 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Total 2:</span>
<span class="breakdown-value-total">160 RON</span>
</div>
</div>
<div class="features-section">
<h5 class="features-title">Include:</h5>
<ul class="features-list">
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fotografie macro HD ambii ochi</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Editare manuală de artist</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fișier digital 4K</span>
</li>
</ul>
</div>
<button class="cta-button">Selectează A2</button>
</div>
<!-- B2 -->
<div class="pricing-card">
<div class="pricing-card-header">
<div class="tier-badge">B2</div>
<h4 class="tier-name">Efecte Premium</h4>
<p class="tier-description">Efect artistic, aceeași pentru ambii ochi</p>
</div>
<div class="pricing-breakdown">
<div class="breakdown-row">
<span class="breakdown-label">Fotografiere/Editare:</span>
<span class="breakdown-value">120 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Foto 30/40:</span>
<span class="breakdown-value">20 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Rama:</span>
<span class="breakdown-value">30 RON</span>
</div>
<div class="breakdown-row separator">
<span class="breakdown-label">Total 1:</span>
<span class="breakdown-value-total">140 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Total 2:</span>
<span class="breakdown-value-total">170 RON</span>
</div>
</div>
<div class="features-section">
<h5 class="features-title">Include:</h5>
<ul class="features-list">
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fotografie macro 4K ambii ochi</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Editare avansată + efecte</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Print aluminiu 30x40cm</span>
</li>
</ul>
</div>
<button class="cta-button">Selectează B2</button>
</div>
<!-- C2 -->
<div class="pricing-card">
<div class="pricing-card-header">
<div class="tier-badge">C2</div>
<h4 class="tier-name">Efecte Complexe</h4>
<p class="tier-description">Efect artistic dramatic cu nuanțe de foc</p>
</div>
<div class="pricing-breakdown">
<div class="breakdown-row">
<span class="breakdown-label">Fotografiere/Editare:</span>
<span class="breakdown-value">140 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Foto 30/40:</span>
<span class="breakdown-value">20 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Rama:</span>
<span class="breakdown-value">30 RON</span>
</div>
<div class="breakdown-row separator">
<span class="breakdown-label">Total 1:</span>
<span class="breakdown-value-total">160 RON</span>
</div>
<div class="breakdown-row">
<span class="breakdown-label">Total 2:</span>
<span class="breakdown-value-total">190 RON</span>
</div>
</div>
<div class="features-section">
<h5 class="features-title">Include:</h5>
<ul class="features-list">
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Fotografie macro Ultra HD ambii ochi</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Editare artistică premium</span>
</li>
<li class="feature-item">
<svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor"><polyline points="20 6 9 17 4 12"></polyline></svg>
<span>Print canvas 40x40cm</span>
</li>
</ul>
</div>
<button class="cta-button">Selectează C2</button>
</div>
</div>
</div>
</div>
</div>
</section>
<section id="galerie" class="gallery-section">
<div class="gallery-container">
<div class="gallery-header">
<h2 class="gallery-title">Galeria Noastră</h2>
<p class="gallery-subtitle">Descoperă colecția noastră de opere de artă din irisul ochiului</p>
</div>
<!-- SLIDER WRAPPER -->
<div class="gallery-slider-wrapper">
<div class="gallery-slider-track">
<?php
// Query pentru imagini din media library
$args = array(
'post_type' => 'attachment',
'post_mime_type' => 'image',
'posts_per_page' => -1,  // Toate imaginile
'orderby' => 'rand'
);
$attachments = get_posts($args);
if (!empty($attachments)) {
$index = 0;
foreach ($attachments as $attachment) {
$img_id = $attachment->ID;
$img_url = wp_get_attachment_url($img_id);
$full_url = $img_url;
$title = $attachment->post_title ?: 'Iris Photo';
$alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true) ?: $title;
$category = get_post_meta($img_id, '_iris_category', true) ?: 'natural';
$client_name = get_post_meta($img_id, '_iris_client_name', true);
// ÎN SLIDER NU MAI FOLOSIM gallery-tall/standard
?>
<div class="gallery-item-premium gallery-slider-item" data-category="<?php echo esc_attr($category); ?>">
<div class="gallery-image-container">
<img src="<?php echo esc_url($img_url); ?>" 
alt="<?php echo esc_attr($alt_text); ?>"
title="<?php echo esc_attr($title); ?>"
data-full="<?php echo esc_url($full_url); ?>"
loading="lazy"
width="600"
height="600">
<div class="gallery-overlay-premium">
<div class="overlay-content">
<h4><?php echo esc_html($title); ?></h4>
<?php if ($client_name): ?>
<p class="client-name">👤 <?php echo esc_html($client_name); ?></p>
<?php endif; ?>
<div class="overlay-actions">
<button class="zoom-btn" 
aria-label="Mărește imaginea - <?php echo esc_attr($title); ?>"
data-image-url="<?php echo esc_url($full_url); ?>">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
<path d="M9 2a7 7 0 105.12 12.12l4.78 4.78 1.42-1.42-4.78-4.78A7 7 0 009 2zm0 2a5 5 0 110 10 5 5 0 010-10z" fill="currentColor"/>
</svg>
</button>
<span class="category-tag"><?php echo esc_html(ucfirst($category)); ?></span>
</div>
</div>
</div>
</div>
</div>
<?php
$index++;
}
} else {
// Fallback - Placeholder gallery
$placeholder_items = [
['title' => 'Iris Natural Albastru', 'category' => 'natural', 'client' => 'Maria P.'],
['title' => 'Efectul Galaxy', 'category' => 'galaxy', 'client' => 'Alexandru M.'],
['title' => 'Fire Storm Effect', 'category' => 'fire', 'client' => 'Ioana R.'],
['title' => 'Golden Iris', 'category' => 'gold', 'client' => 'Mihai S.'],
['title' => 'Natural Green', 'category' => 'natural', 'client' => 'Ana D.'],
['title' => 'Cosmic Blue', 'category' => 'galaxy', 'client' => 'Radu T.'],
];
foreach ($placeholder_items as $item): ?>
<div class="gallery-item-premium gallery-slider-item" data-category="<?php echo esc_attr($item['category']); ?>">
<div class="gallery-image-container">
<div class="gallery-placeholder-premium">
<div class="placeholder-icon">👁️</div>
<div class="placeholder-gradient <?php echo esc_attr($item['category']); ?>"></div>
</div>
<div class="gallery-overlay-premium">
<div class="overlay-content">
<h4><?php echo esc_html($item['title']); ?></h4>
<p class="client-name">👤 <?php echo esc_html($item['client']); ?></p>
<div class="overlay-actions">
<button class="zoom-btn" aria-label="Mărește imaginea - <?php echo esc_attr($item['title']); ?>">
<svg width="20" height="20" viewBox="0 0 20 20" fill="none">
<path d="M9 2a7 7 0 105.12 12.12l4.78 4.78 1.42-1.42-4.78-4.78A7 7 0 009 2zm0 2a5 5 0 110 10 5 5 0 010-10z" fill="currentColor"/>
</svg>
</button>
<span class="category-tag"><?php echo esc_html(ucfirst($item['category'])); ?></span>
</div>
</div>
</div>
</div>
</div>
<?php endforeach;
}
?>
</div>
<!-- SLIDER CONTROLS -->
<div class="slider-controls">
<button class="slider-btn prev" aria-label="Imagini anterioare"></button>
<div class="slider-dots">
<button class="slider-dot" aria-label="Slide 1"></button>
<button class="slider-dot" aria-label="Slide 2"></button>
<button class="slider-dot" aria-label="Slide 3"></button>
<button class="slider-dot" aria-label="Slide 4"></button>
<button class="slider-dot" aria-label="Slide 5"></button>
<button class="slider-dot" aria-label="Slide 6"></button>
<button class="slider-dot" aria-label="Slide 7"></button>
<button class="slider-dot" aria-label="Slide 8"></button>
<button class="slider-dot" aria-label="Slide 9"></button>
</div>
<button class="slider-btn next" aria-label="Imagini următoare"></button>
</div>
</div>
</div>
</section>
<!-- Process Section - Premium Timeline -->
<section class="process-section-premium">
<div class="container">
<div class="section-header-premium">
<span class="section-subtitle">Procesul nostru</span>
<h2 class="section-title-premium">Cum creăm <br> arta ochiilor tăi?</h2>
<p class="section-description-premium">O experiență personalizată în 4 pași</p>
</div>
<div class="process-timeline-wrapper">
<div class="timeline-track"></div>
<div class="process-grid">
<!-- Step 1 -->
<div class="process-step-premium" data-step="1">
<div class="step-number-badge">01</div>
<div class="step-marker-dot"></div>
<div class="step-content-wrapper">
<div class="step-icon-container">
<svg width="48" height="48" viewBox="0 0 48 48" fill="none">
<path d="M24 4C12.95 4 4 12.95 4 24s8.95 20 20 20 20-8.95 20-20S35.05 4 24 4zm0 36c-8.84 0-16-7.16-16-16S15.16 8 24 8s16 7.16 16 16-7.16 16-16 16z" fill="currentColor"/>
<path d="M24 12c-6.63 0-12 5.37-12 12s5.37 12 12 12 12-5.37 12-12-5.37-12-12-12zm0 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" fill="currentColor"/>
</svg>
</div>
<div class="step-text">
<h3 class="step-title">Consultanță & Programare</h3>
<p class="step-description">Discutăm despre viziunea ta și alegi efectul artistic preferat. Sesiunea se programează la momentul perfect pentru tine.</p>
<ul class="step-highlights">
<li>Consultanță gratuită 15 minute</li>
<li>Alegerea efectelor artistice</li>
<li>Programare flexibilă</li>
</ul>
</div>
</div>
</div>
<!-- Step 2 -->
<div class="process-step-premium" data-step="2">
<div class="step-number-badge">02</div>
<div class="step-marker-dot"></div>
<div class="step-content-wrapper">
<div class="step-icon-container">
<svg width="48" height="48" viewBox="0 0 48 48" fill="none">
<path d="M24 6C14.06 6 6 14.06 6 24s8.06 18 18 18 18-8.06 18-18S33.94 6 24 6zm0 32c-7.73 0-14-6.27-14-14s6.27-14 14-14 14 6.27 14 14-6.27 14-14 14z" fill="currentColor"/>
<circle cx="24" cy="24" r="6" fill="currentColor"/>
</svg>
</div>
<div class="step-text">
<h3 class="step-title">Captură Macro Profesională</h3>
<p class="step-description">Folosim echipamente fotografice de ultimă generație pentru a captura fiecare detaliu special al irisului tău în siguranță totală.</p>
<ul class="step-highlights">
<li>Echipament certificat & sigur</li>
<li>Rezoluție Ultra HD 4K</li>
<li>Proces nedureros</li>
</ul>
</div>
</div>
</div>
<!-- Step 3 -->
<div class="process-step-premium" data-step="3">
<div class="step-number-badge">03</div>
<div class="step-marker-dot"></div>
<div class="step-content-wrapper">
<div class="step-icon-container">
<svg width="48" height="48" viewBox="0 0 48 48" fill="none">
<path d="M6 6h36v36H6V6zm3 3v30h30V9H9z" fill="currentColor"/>
<path d="M13 20l6-8 8 10 8-6v10H13v-6z" fill="currentColor"/>
</svg>
</div>
<div class="step-text">
<h3 class="step-title">Editare Artistică Avansată</h3>
<p class="step-description">Artiștii noștri digitali transformă imaginea în operă de artă, aplicând efecte personalizate și îmbunătățiri premium.</p>
<ul class="step-highlights">
<li>Editare manuală de artist</li>
<li>Efecte premium personalizate</li>
<li>Optimizare pentru print</li>
</ul>
</div>
</div>
</div>
<!-- Step 4 -->
<div class="process-step-premium" data-step="4">
<div class="step-number-badge">04</div>
<div class="step-marker-dot"></div>
<div class="step-content-wrapper">
<div class="step-icon-container">
<svg width="48" height="48" viewBox="0 0 48 48" fill="none">
<path d="M6 8h36v32H6V8zm3 3v26h30V11H9z" fill="currentColor"/>
<path d="M12 16h24v2H12v-2zm0 6h16v2H12v-2z" fill="currentColor"/>
</svg>
</div>
<div class="step-text">
<h3 class="step-title">Livrare & Print Premium</h3>
<p class="step-description">Primești fișierele digitale HD și opțional print-uri pe materiale premium cu înrămare profesională.</p>
<ul class="step-highlights">
<li>Fișiere digitale HD</li>
<li>Print-uri aluminiu/canvas</li>
<li>Înrămare profesională</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
e.preventDefault();
alert('Mulțumim! Mesajul tău a fost trimis.');
this.reset();
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery Modal
    const modal = document.getElementById('gallery-modal');
    const modalImage = document.getElementById('modal-image');
    const closeBtn = document.querySelector('.modal-close');
    
    // Gallery Slider
    const sliderTrack = document.querySelector('.gallery-slider-track');
    const sliderItems = document.querySelectorAll('.gallery-slider-item');
    const prevBtn = document.querySelector('.gallery-prev-btn');
    const nextBtn = document.querySelector('.gallery-next-btn');
    const dots = document.querySelectorAll('.gallery-dot');
    const infoText = document.getElementById('gallery-info');
    
    let currentIndex = 0;
    let isAnimating = false;
    let touchStartX = 0;
    let touchEndX = 0;
    
    // ===== GET ITEM WIDTH DYNAMICALLY =====
    function getItemWidth() {
        if (sliderItems.length === 0) return 0;
        return sliderItems.offsetWidth;
    }
    
    // ===== SCROLL TO SLIDE =====
    function scrollToSlide(index) {
        if (isAnimating || sliderItems.length === 0) return;
        
        isAnimating = true;
        
        // Ensure index is valid
        if (index < 0) index = sliderItems.length - 1;
        if (index >= sliderItems.length) index = 0;
        
        currentIndex = index;
        
        const itemWidth = getItemWidth();
        const scrollPosition = itemWidth * index;
        
        // Smooth scroll
        sliderTrack.scrollTo({
            left: scrollPosition,
            behavior: 'smooth'
        });
        
        // Update UI after scroll completes
        setTimeout(() => {
            updateDots();
            updateInfo();
            isAnimating = false;
            console.log(`✅ Scrolled to slide ${index + 1}`);
        }, 400);
    }
    
    // ===== UPDATE DOTS =====
    function updateDots() {
        dots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    // ===== UPDATE INFO =====
    function updateInfo() {
        if (infoText && sliderItems.length > 0) {
            infoText.textContent = `${currentIndex + 1} / ${sliderItems.length}`;
        }
    }
    
    // ===== PREV BUTTON =====
    prevBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if (!isAnimating) {
            scrollToSlide(currentIndex - 1);
        }
    });
    
    // ===== NEXT BUTTON =====
    nextBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        if (!isAnimating) {
            scrollToSlide(currentIndex + 1);
        }
    });
    
    // ===== DOT CLICK =====
    dots.forEach((dot, idx) => {
        dot.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (!isAnimating) {
                scrollToSlide(idx);
            }
        });
    });
    
    // ===== TOUCH EVENTS (Mobile Swipe) =====
    sliderTrack.addEventListener('touchstart', function(e) {
        if (isAnimating) return;
        touchStartX = e.touches.clientX;
    }, { passive: true });
    
    sliderTrack.addEventListener('touchend', function(e) {
        if (isAnimating) return;
        
        touchEndX = e.changedTouches.clientX;
        const swipeDistance = touchStartX - touchEndX;
        const minSwipeDistance = 50; // Minimum distance to trigger swipe
        
        if (Math.abs(swipeDistance) > minSwipeDistance) {
            if (swipeDistance > 0) {
                // Swiped left = Next slide
                scrollToSlide(currentIndex + 1);
            } else {
                // Swiped right = Previous slide
                scrollToSlide(currentIndex - 1);
            }
        }
    }, { passive: true });
    
    // ===== KEYBOARD NAVIGATION =====
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowRight' && !isAnimating) {
            scrollToSlide(currentIndex + 1);
        } else if (e.key === 'ArrowLeft' && !isAnimating) {
            scrollToSlide(currentIndex - 1);
        }
    });
    
    // ===== MODAL FUNCTIONALITY =====
    sliderItems.forEach((item, idx) => {
        item.addEventListener('click', function() {
            const img = this.querySelector('img');
            if (img) {
                modalImage.src = img.src;
                modalImage.alt = img.alt;
                modal.style.display = 'block';
            }
        });
    });
    
    // Close Modal
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            modal.style.display = 'none';
        });
    }
    
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
    
    // ===== SYNC SLIDER WITH SCROLL POSITION =====
    let scrollTimeout;
    sliderTrack.addEventListener('scroll', function() {
        clearTimeout(scrollTimeout);
        
        scrollTimeout = setTimeout(() => {
            if (isAnimating) return;
            
            const itemWidth = getItemWidth();
            const scrollLeft = sliderTrack.scrollLeft;
            const newIndex = Math.round(scrollLeft / itemWidth);
            
            if (newIndex !== currentIndex) {
                currentIndex = newIndex;
                updateDots();
                updateInfo();
            }
        }, 100);
    }, { passive: true });
    
    // ===== INITIALIZE =====
    updateDots();
    updateInfo();
    console.log('✅ Gallery Slider READY! Found', sliderItems.length, 'images');
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {

    // ===== PRICING SLIDERS - FIECARE CATEGORY SEPARAT =====
    document.querySelectorAll('.pricing-category').forEach(category => {
        const gridContainer = category.querySelector('.pricing-cards-grid');
        const dotsContainer = category.querySelector('.pricing-slider-dots');
        const prevBtn = category.querySelector('.pricing-slider-arrow-prev');
        const nextBtn = category.querySelector('.pricing-slider-arrow-next');
        
        if (!gridContainer || !dotsContainer) return;
        
        const cards = gridContainer.querySelectorAll('.pricing-card');
        if (cards.length === 0) return;
        
        let currentIndex = 0;
        let isAnimating = false;
        let scrollTimeout;
        
        // ===== CREATE DOTS =====
        dotsContainer.innerHTML = '';
        cards.forEach((card, index) => {
            const dot = document.createElement('button');
            dot.className = 'pricing-slider-dot';
            if (index === 0) dot.classList.add('active');
            dot.setAttribute('aria-label', `Card ${index + 1}`);
            dot.setAttribute('type', 'button');
            dotsContainer.appendChild(dot);
        });
        
        // ===== GET CARD WIDTH DYNAMICALLY =====
        function getCardWidth() {
            return cards.offsetWidth;
        }
        
        // ===== SCROLL TO CARD =====
        function scrollToCard(index, skipSync = false) {
            if (isAnimating || cards.length === 0) return;
            
            isAnimating = true;
            
            // Validate index
            if (index < 0) index = 0;
            if (index >= cards.length) index = cards.length - 1;
            
            currentIndex = index;
            
            // Use offsetLeft directly - CORRECT!
            const scrollPosition = cards[index].offsetLeft;
            
            gridContainer.scrollTo({
                left: scrollPosition,
                behavior: 'smooth'
            });
            
            // Update dots immediately
            updateDots();
            
            // Reset animating flag after scroll
            setTimeout(() => {
                isAnimating = false;
            }, 400);
        }
        
        // ===== UPDATE DOTS =====
        function updateDots() {
            const dots = dotsContainer.querySelectorAll('.pricing-slider-dot');
            dots.forEach((dot, i) => {
                if (i === currentIndex) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }
        
        // ===== DOT CLICK EVENT =====
        dotsContainer.querySelectorAll('.pricing-slider-dot').forEach((dot, idx) => {
            dot.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (!isAnimating) {
                    scrollToCard(idx, true);
                }
            });
        });
        
        // ===== PREV BUTTON =====
        if (prevBtn) {
            prevBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (!isAnimating) {
                    let newIndex = currentIndex - 1;
                    if (newIndex < 0) newIndex = 0;
                    scrollToCard(newIndex, true);
                }
            });
        }
        
        // ===== NEXT BUTTON =====
        if (nextBtn) {
            nextBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                if (!isAnimating) {
                    let newIndex = currentIndex + 1;
                    if (newIndex >= cards.length) newIndex = cards.length - 1;
                    scrollToCard(newIndex, true);
                }
            });
        }
        
        // ===== SYNC SCROLL WITH DOTS =====
        gridContainer.addEventListener('scroll', function() {
            clearTimeout(scrollTimeout);
            
            scrollTimeout = setTimeout(() => {
                if (isAnimating) return;
                
                let closestIndex = 0;
                let closestDistance = Infinity;
                
                cards.forEach((card, idx) => {
                    const distance = Math.abs(card.offsetLeft - gridContainer.scrollLeft);
                    if (distance < closestDistance) {
                        closestDistance = distance;
                        closestIndex = idx;
                    }
                });
                
                if (closestIndex !== currentIndex) {
                    currentIndex = closestIndex;
                    updateDots();
                }
            }, 100);
        }, { passive: true });
        
        // ===== INITIALIZE =====
        updateDots();
        console.log(`✅ Pricing slider initialized with ${cards.length} cards`);
    });
});
</script>

               <?php the_content(); ?>
</main>
<?php get_footer(); ?>
