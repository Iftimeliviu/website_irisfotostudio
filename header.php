<?php
/**
* The header for our theme
*
* This is the template that displays all of the <head> section and everything up until <div id="content">
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Iris_Studio_Buzau
*/
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="google-site-verification" content="OlVL0yFJYVL_m2yFIpOiHOZbO2W3p7vA-KUwRY0FT7s" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<body id="top" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php if ($pixel_id): ?>
<!-- Facebook Pixel No-JS fallback -->
<noscript>
<img height="1" width="1" style="display:none" alt="fb_pixel"
src="https://www.facebook.com/tr?id=<?php echo esc_attr($pixel_id); ?>&ev=PageView&noscript=1"/>
</noscript>
<?php endif; ?>
<!-- Skip to content pentru accessibility -->
<a class="skip-link screen-reader-text" href="#main-content">Skip to content</a>
<div id="page" class="site-wrapper">
<header id="masthead" class="site-header" role="banner">
<div class="header-container">
<div class="header-inner">
<!-- Logo/Site Branding -->
<div class="site-branding">
<?php if (has_custom_logo()) : ?>
<!-- Logo încărcat prin WordPress Customizer -->
<div class="site-logo">
<?php the_custom_logo(); ?>
</div>
<?php else : ?>
<!-- Fallback: logo manual sau text -->
<?php 
$logo_path = get_template_directory_uri() . '/assets/images/iris-logo.png';
if (file_exists(get_template_directory() . '/assets/images/iris-logo.png')) : 
?>
<div class="site-logo">
<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
<img src="<?php echo esc_url($logo_path); ?>" 
alt="<?php bloginfo('name'); ?> Logo"
class="custom-logo">
</a>
</div>
<?php else : ?>
<!-- Fallback: Text title dacă logo-ul nu există -->
<div class="site-title-wrapper">
<?php if (is_front_page() && is_home()) : ?>
<h1 class="site-title">
<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
<?php bloginfo('name'); ?>
</a>
</h1>
<?php else : ?>
<p class="site-title">
<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
<?php bloginfo('name'); ?>
</a>
</p>
<?php endif; ?>
<?php
$description = get_bloginfo('description', 'display');
if ($description || is_customize_preview()) :
?>
<p class="site-description"><?php echo $description; ?></p>
<?php endif; ?>
</div>
<?php endif; ?>
<?php endif; ?>
</div>
<!-- Desktop Navigation -->
<nav class="main-navigation desktop-nav" role="navigation" aria-label="Main Navigation">
<?php
wp_nav_menu(array(
'theme_location' => 'primary',
'menu_id'        => 'primary-menu',
'menu_class'     => 'nav-menu',
'container'      => false,
'fallback_cb'    => '__return_false',
));
?>
</nav>
<!-- Contact CTA (Desktop) -->
<div class="header-cta desktop-cta">
<a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('iris_studio_phone', '+40724238352'))); ?>" 
class="header-phone-link"
title="Sună pentru programare">
<svg class="phone-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
</svg>
<span><?php echo esc_html(get_theme_mod('iris_studio_phone', '+40 724 238 352')); ?></span>
</a>
<a href="#contact" class="cta-button">Rezervă Acum</a>
</div>
<!-- Mobile Menu Toggle -->
<button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Menu">
<span class="hamburger-line"></span>
<span class="hamburger-line"></span>
<span class="hamburger-line"></span>
</button>
</div>
</div>
</header>
<!-- Mobile Menu Overlay -->
<div class="mobile-menu-wrapper" id="mobile-menu">
<div class="mobile-menu-overlay"></div>
<div class="mobile-menu-content">
<div class="mobile-menu-header">
<div class="mobile-logo">
<?php if (has_custom_logo()) : ?>
<?php the_custom_logo(); ?>
<?php else : ?>
<span class="mobile-site-title"><?php bloginfo('name'); ?></span>
<?php endif; ?>
</div>
<button class="mobile-menu-close" aria-label="Close mobile menu">
<svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<line x1="18" y1="6" x2="6" y2="18"></line>
<line x1="6" y1="6" x2="18" y2="18"></line>
</svg>
</button>
</div>
<nav class="mobile-navigation" role="navigation">
<?php
wp_nav_menu(array(
'theme_location' => 'primary',
'menu_class'     => 'mobile-nav-menu',
'container'      => false,
'fallback_cb'    => '__return_false',
));
?>
</nav>
<div class="mobile-contact-info">
<div class="mobile-contact-item">
<svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
</svg>
<a href="tel:<?php echo esc_attr(str_replace(' ', '', get_theme_mod('iris_studio_phone', '+40724238352'))); ?>">
<?php echo esc_html(get_theme_mod('iris_studio_phone', '+40 724 238 352')); ?>
</a>
</div>
<div class="mobile-contact-item">
<svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
<polyline points="22,6 12,13 2,6"></polyline>
</svg>
<a href="mailto:<?php echo esc_attr(get_theme_mod('iris_studio_email', 'contact@irisstudiobuzau.ro')); ?>">
<?php echo esc_html(get_theme_mod('iris_studio_email', 'contact@irisstudiobuzau.ro')); ?>
</a>
</div>
<div class="mobile-contact-item">
<svg class="contact-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
<circle cx="12" cy="10" r="3"></circle>
</svg>
<span><?php echo esc_html(get_theme_mod('iris_studio_address', 'Strada Panduri 5A, Buzău')); ?></span>
</div>
</div>
<div class="mobile-cta-wrapper">
<a href="#contact" class="mobile-cta-button">Programează Ședința Foto</a>
</div>
<div class="mobile-social-links">
<a href="https://www.facebook.com/irisstudiobuzau" target="_blank" rel="noopener" aria-label="Facebook">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
<path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
</svg>
</a>
<a href="https://www.instagram.com/igv_fotoiris?igsh=MXYwcXo0cDY0aTNlag" target="_blank" rel="noopener" aria-label="Instagram">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
</svg>
</a>
</div>
</div>
</div>
<!-- Main Content Area -->
<main id="main-content" class="site-main" role="main">
<style>
/* ========================================
HEADER STYLES - TEAL PREMIUM DESIGN
======================================== */
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
* {
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
font-family: var(--font-primary);
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
font-family: var(--font-display);
font-weight: 700;
line-height: 1.2;
color: var(--text-dark);
}
/* Site Wrapper */
.site-wrapper {
display: flex;
flex-direction: column;
min-height: 100vh;
}
/* ===== MAIN HEADER ===== */
.site-header {
background: var(--color-surface);
backdrop-filter: blur(10px);
box-shadow: var(--shadow-sm);
position: sticky;
top: 0;
z-index: 1000;
transition: all var(--duration-normal) var(--ease-standard);
border-bottom: 1px solid var(--color-border);
animation: fadeInDown 0.6s ease-out;
}
.site-header.scrolled {
background: var(--color-surface);
box-shadow: var(--shadow-md);
border-bottom-color: var(--color-border);
}
.header-container {
max-width: 100%;
margin: 0 auto;
padding: 0;
}
.header-inner {
display: flex;
align-items: center;
justify-content: space-between;
padding: var(--space-12) var(--space-32);
gap: var(--space-32);
max-width: 100%;
margin: 0 auto;
}
/* ===== SITE BRANDING ===== */
.site-branding {
flex-shrink: 0;
z-index: 10;
margin-right: auto;
display: flex;
align-items: center;
gap: var(--space-12);
}
.site-logo {
display: flex;
align-items: center;
gap: var(--space-12);
}
.site-logo img,
.custom-logo {
max-height: 70px;
width: auto;
transition: all var(--duration-normal) var(--ease-standard);
filter: drop-shadow(0 2px 4px rgba(var(--color-teal-500-rgb), 0.15));
display: block;
flex-shrink: 0;
}
.site-header.scrolled .site-logo img,
.site-header.scrolled .custom-logo {
max-height: 60px;
}
.site-title-wrapper {
display: flex;
flex-direction: column;
align-items: flex-start;
}
.site-title {
margin: 0;
font-size: var(--font-size-xl);
font-weight: var(--font-weight-bold);
line-height: 1;
letter-spacing: var(--letter-spacing-tight);
font-family: var(--font-family-base);
}
.site-title a {
color: var(--text-dark);
text-decoration: none;
transition: var(--transition-smooth);
background: var(--gradient-teal);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
background-clip: text;
}
.site-title a:hover {
opacity: 0.8;
}
.site-description {
margin: 4px 0 0 0;
font-size: 0.85rem;
color: var(--text-gray);
font-style: italic;
letter-spacing: 0.3px;
}
/* ===== DESKTOP NAVIGATION ===== */
.desktop-nav {
flex: 1;
display: flex;
justify-content: center;
}
.nav-menu {
display: flex;
list-style: none;
margin: 0;
padding: 0;
gap: 8px;
}
.nav-menu li {
position: relative;
}
.nav-menu > li > a {
color: var(--text-dark);
text-decoration: none;
font-weight: 600;
font-size: 0.95rem;
padding: 12px 18px;
display: block;
transition: var(--transition-smooth);
border-radius: 8px;
position: relative;
letter-spacing: 0.3px;
text-transform: uppercase;
}
.nav-menu > li > a::before {
content: '';
position: absolute;
bottom: 8px;
left: 18px;
right: 18px;
height: 2px;
background: var(--gradient-teal);
transform: scaleX(0);
transition: transform 0.3s ease;
border-radius: 2px;
}
.nav-menu > li > a:hover,
.nav-menu .current-menu-item > a {
color: var(--primary-teal);
background: rgba(45, 166, 168, 0.08);
}
.nav-menu > li > a:hover::before,
.nav-menu .current-menu-item > a::before {
transform: scaleX(1);
}
/* Dropdown Submenu */
.nav-menu .sub-menu {
position: absolute;
top: calc(100% + 5px);
left: 0;
background: var(--bg-white);
box-shadow: var(--shadow-lg);
list-style: none;
padding: 12px 0;
margin: 0;
min-width: 200px;
opacity: 0;
visibility: hidden;
transform: translateY(-10px);
transition: var(--transition-smooth);
border-radius: 12px;
border: 1px solid rgba(45, 166, 168, 0.1);
}
.nav-menu li:hover > .sub-menu {
opacity: 1;
visibility: visible;
transform: translateY(0);
}
.nav-menu .sub-menu li {
border-bottom: 1px solid var(--bg-light);
}
.nav-menu .sub-menu li:last-child {
border-bottom: none;
}
.nav-menu .sub-menu a {
padding: 12px 24px;
font-size: 0.9rem;
color: var(--text-dark);
transition: var(--transition-smooth);
text-transform: none;
}
.nav-menu .sub-menu a:hover {
background: rgba(45, 166, 168, 0.08);
color: var(--primary-teal);
padding-left: 30px;
}
/* ===== HEADER CTA ===== */
.header-cta {
display: flex;
align-items: center;
gap: 16px;
flex-shrink: 0;
margin-left: auto;
}
.header-phone-link {
display: flex;
align-items: center;
gap: var(--space-10);
color: var(--color-text);
text-decoration: none;
font-weight: var(--font-weight-semibold);
transition: all var(--duration-normal) var(--ease-standard);
padding: var(--space-12) var(--space-20);
border-radius: var(--radius-base);
background: var(--color-secondary);
font-size: var(--font-size-sm);
white-space: nowrap;
}
.header-phone-link:hover {
color: var(--color-primary);
background: var(--color-secondary-hover);
transform: translateY(-2px);
}
.phone-icon {
width: 16px;
height: 16px;
stroke: var(--color-primary);
flex-shrink: 0;
}
.cta-button {
background: var(--color-primary);
color: var(--color-btn-primary-text);
padding: var(--space-8) var(--space-16);
border-radius: var(--radius-full);
text-decoration: none;
font-weight: var(--font-weight-bold);
font-size: var(--font-size-sm);
transition: all var(--duration-normal) var(--ease-standard);
box-shadow: 0 4px 15px rgba(var(--color-teal-500-rgb), 0.35);
border: none;
cursor: pointer;
letter-spacing: 0.5px;
text-transform: uppercase;
display: inline-block;
white-space: nowrap;
}
.cta-button:hover {
transform: translateY(-3px);
box-shadow: 0 8px 25px rgba(45, 166, 168, 0.5);
color: #fff;
}
/* ===== MOBILE MENU TOGGLE ===== */
.mobile-menu-toggle {
display: none;
flex-direction: column;
background: rgba(45, 166, 168, 0.12) !important;
border: none !important;
cursor: pointer;
padding: 12px !important;
gap: 5px !important;
z-index: 1001;
border-radius: 8px !important;
transition: all 0.3s ease !important;
width: 48px !important;
height: 48px !important;
justify-content: center !important;
align-items: center !important;
}
.mobile-menu-toggle:hover {
background: rgba(45, 166, 168, 0.2) !important;
}
.mobile-menu-toggle:focus {
outline: none;
background: rgba(45, 166, 168, 0.25) !important;
}
.hamburger-line {
display: block !important;
width: 26px !important;
height: 3px !important;
background: #2da6a8 !important;
border-radius: 3px !important;
transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
}
/* ===== HAMBURGER ACTIVE STATE ===== */
.mobile-menu-toggle.active .hamburger-line:nth-child(1) {
transform: rotate(45deg) translate(8px, 8px) !important;
background: #2da6a8 !important;
}
.mobile-menu-toggle.active .hamburger-line:nth-child(2) {
opacity: 0 !important;
transform: translateX(-10px) !important;
}
.mobile-menu-toggle.active .hamburger-line:nth-child(3) {
transform: rotate(-45deg) translate(7px, -7px) !important;
background: #2da6a8 !important;
}
/* ===== MOBILE MENU ===== */
.mobile-menu-wrapper {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
z-index: 999;
visibility: hidden;
background: rgba(45, 166, 168, 0.12) !important;
opacity: 0;
transition: var(--transition-smooth);
}
.mobile-menu-wrapper.active {
visibility: visible;
opacity: 1;
}
.mobile-menu-overlay {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
background: rgba(45, 166, 168, 0.12) !important;;
backdrop-filter: blur(8px);
transition: opacity 0.3s ease;
}
.mobile-menu-content {
position: absolute;
top: 0;
right: 0;
width: 85%;
max-width: 420px;
height: 100%;
background: rgba(45, 166, 168, 0.12) !important;;
transform: translateX(100%);
transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
overflow-y: auto;
display: flex;
flex-direction: column;
box-shadow: -8px 0 32px rgba(0, 0, 0, 0.2);
}
.mobile-menu-wrapper.active .mobile-menu-content {
transform: translateX(0);
}
/* Mobile Menu Header */
.mobile-menu-header {
display: flex;
justify-content: space-between;
align-items: center;
padding: 24px;
border-bottom: 2px solid rgba(45, 166, 168, 0.15);
background: var(--gradient-teal); /* ✅ GRADIENT TURCOAZ SOLID */
position: sticky;
top: 0;
z-index: 10;
}
.mobile-logo {
flex: 1;
}
.mobile-logo .custom-logo {
max-height: 50px;
filter: brightness(0) invert(1); /* Logo alb pe turcoaz */
}
.mobile-site-title {
font-size: 1.5rem;
font-weight: 700;
color: #ffffff;
font-family: var(--font-display);
letter-spacing: -0.5px;
}
.mobile-menu-close {
background: rgba(255, 255, 255, 0.2); /* Transparent alb pe turcoaz */
border: none;
cursor: pointer;
padding: 8px;
color: #ffffff;
transition: var(--transition-smooth);
border-radius: 8px;
display: flex;
align-items: center;
justify-content: center;
width: 40px;
height: 40px;
}
.mobile-menu-close:hover {
background: rgba(255, 255, 255, 0.3); /* Mai opac la hover */
transform: rotate(90deg);
}
.mobile-menu-close svg {
width: 28px;
height: 28px;
}
/* Mobile Navigation */
.mobile-navigation {
flex: 1;
padding: 24px;
}
.mobile-nav-menu {
list-style: none;
margin: 0;
padding: 0;
}
.mobile-nav-menu li {
border-bottom: 1px solid rgba(45, 166, 168, 0.1);
}
.mobile-nav-menu > li:last-child {
border-bottom: none;
}
.mobile-nav-menu a {
display: flex;
align-items: center;
justify-content: space-between;
padding: 16px 12px;
color: var(--text-dark);
text-decoration: none;
font-weight: 600;
font-size: 1.1rem;
transition: var(--transition-smooth);
border-radius: 8px;
margin-bottom: 4px;
}
.mobile-nav-menu a:hover,
.mobile-nav-menu .current-menu-item > a {
color: var(--primary-teal);
background: rgba(45, 166, 168, 0.1);
padding-left: 20px;
}
.mobile-nav-menu a::after {
content: '›';
font-size: 1.5rem;
opacity: 0;
transition: var(--transition-smooth);
}
.mobile-nav-menu a:hover::after {
opacity: 1;
}
/* Mobile submenu */
.mobile-nav-menu .sub-menu {
list-style: none;
padding-left: 24px;
margin: 8px 0;
border-left: 2px solid rgba(45, 166, 168, 0.3);
}
.mobile-nav-menu .sub-menu a {
font-size: 1rem;
padding: 12px;
font-weight: 500;
}
/* Mobile Contact Info */
.mobile-contact-info {
padding: 24px;
background: linear-gradient(135deg, rgba(45, 166, 168, 0.08), rgba(61, 196, 198, 0.08));
border-top: 2px solid rgba(45, 166, 168, 0.15);
}
.mobile-contact-item {
display: flex;
align-items: center;
gap: 14px;
margin-bottom: 18px;
padding: 12px;
background: rgba(255, 255, 255, 0.8);
border-radius: 10px;
transition: var(--transition-smooth);
}
.mobile-contact-item:hover {
background: rgba(255, 255, 255, 1);
transform: translateX(5px);
box-shadow: var(--shadow-sm);
}
.mobile-contact-item:last-child {
margin-bottom: 0;
}
.contact-icon {
width: 22px;
height: 22px;
color: var(--primary-teal);
flex-shrink: 0;
}
.mobile-contact-item a {
color: var(--text-dark);
text-decoration: none;
transition: var(--transition-smooth);
font-weight: 500;
}
.mobile-contact-item a:hover {
color: var(--primary-teal);
}
.mobile-contact-item span {
font-size: 0.95rem;
}
/* Mobile CTA */
.mobile-cta-wrapper {
padding: 24px;
}
.mobile-cta-button {
display: block;
text-align: center;
background: linear-gradient(135deg, var(--primary-teal) 0%, var(--teal-light) 100%) !important;
color: #fff !important;
border-radius: 50px !important;
font-weight: 700 !important;
font-size: 0.95rem !important;
box-shadow: 0 6px 25px rgba(45, 166, 168, 0.35) !important;
transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1) !important;
display: inline-flex !important;
align-items: center !important;
gap: 0.5rem !important;
position: relative !important;
overflow: hidden !important;
border: none !important;
text-decoration: none !important;
cursor: pointer !important;
}
.mobile-cta-button::before {
content: '' !important;
position: absolute !important;
top: 0 !important;
left: -100% !important;
width: 100% !important;
height: 100% !important;
background: rgba(255, 255, 255, 0.2) !important;
transition: left 0.5s ease !important;
z-index: 1 !important;
}
/* ===== HOVER STATE ===== */
.mobile-cta-button:hover {
transform: translateY(-4px) scale(1.08) !important;
box-shadow: 0 10px 40px rgba(45, 166, 168, 0.5) !important;
color: #fff !important;
}
.mobile-cta-button:hover::before {
left: 100% !important;
}
/* ===== ACTIVE/CLICK STATE ===== */
.mobile-cta-button:active {
transform: translateY(-2px) scale(1.02) !important;
box-shadow: 0 5px 20px rgba(45, 166, 168, 0.4) !important;
}
/* ===== FOCUS STATE (Accessibility) ===== */
.mobile-cta-button:focus {
outline: 2px solid rgba(45, 166, 168, 0.5) !important;
outline-offset: 2px !important;
}
/* Mobile Social Links */
.mobile-social-links {
display: flex;
justify-content: center;
gap: 24px;
padding: 24px;
border-top: 1px solid rgba(45, 166, 168, 0.1);
background: rgba(255, 255, 255, 0.5);
}
.mobile-social-links a {
color: var(--text-gray);
transition: var(--transition-smooth);
display: flex;
align-items: center;
justify-content: center;
width: 44px;
height: 44px;
border-radius: 50%;
background: rgba(45, 166, 168, 0.1);
}
.mobile-social-links a:hover {
color: var(--primary-teal);
background: rgba(45, 166, 168, 0.2);
transform: translateY(-3px) scale(1.1);
}
/* Skip Link */
.skip-link {
position: absolute;
top: -60px;
left: 20px;
background: var(--gradient-teal);
color: #ffffff;
padding: 12px 24px;
text-decoration: none;
z-index: 10000;
border-radius: 8px;
font-weight: 600;
transition: top 0.3s ease;
}
.skip-link:focus {
top: 20px;
box-shadow: var(--shadow-lg);
}
/* ========================================
RESPONSIVE STYLES
======================================== */
@media (max-width: 1024px) {
.desktop-nav,
.desktop-cta {
display: none;
}
.mobile-menu-toggle {
display: flex;
}
.header-container {
padding: 0 20px;
}
.header-inner {
padding: 12px 20px;
gap: 20px;
}
.site-title {
font-size: 1.4rem;
}
.site-logo img,
.custom-logo {
max-height: 65px;
}
.site-description {
font-size: 0.8rem;
}
.mobile-menu-content {
width: 90%;
}
}
@media (max-width: 768px) {
.header-container {
padding: 0 15px;
}
.header-inner {
padding: 12px 15px;
gap: 15px;
}
.site-title {
font-size: 1.3rem;
}
.site-logo img,
.custom-logo {
max-height: 60px;
}
.site-description {
font-size: 0.75rem;
}
.mobile-menu-toggle {
display: flex !important;
background: rgba(45, 166, 168, 0.12);
border: none;
cursor: pointer;
padding: 12px; /* ✅ CRESCUT: de la 10px la 12px */
gap: 6px; /* ✅ CRESCUT: de la 5px la 6px */
padding: 10px;
gap: 5px;
z-index: 1001;
border-radius: 8px;
transition: all 0.3s ease;
}
.mobile-menu-toggle:hover {
background: rgba(45, 166, 168, 0.2);
}
.hamburger-line {
width: 28px; /* ✅ CRESCUT: de la 24px la 28px */
height: 3.5px; /
background: #ffffff; /* ✅ TURCOAZ */
border-radius: 3px;
transition: all 0.3s ease;
}
.mobile-menu-toggle.active .hamburger-line:nth-child(1) {
transform: rotate(45deg) translate(7px, 7px);
background: #2da6a8;
}
.mobile-menu-toggle.active .hamburger-line:nth-child(2) {
opacity: 0;
transform: translateX(-15px);
}
.mobile-menu-toggle.active .hamburger-line:nth-child(3) {
transform: rotate(-45deg) translate(6px, -6px);
background: #2da6a8;
}
/* Mobile Menu Content */
.mobile-menu-content {
width: 90%;
}
.mobile-menu-header {
padding: 20px;
background: linear-gradient(135deg, #2da6a8 0%, #3dc4c6 100%);
}
.mobile-navigation {
padding: 20px;
}
.mobile-contact-info {
padding: 20px;
}
.mobile-cta-wrapper {
padding: 20px;
}
.mobile-social-links {
padding: 20px;
}
}
@media (max-width: 480px) {
.header-container {
padding: 0 12px;
}
.header-inner {
padding: 10px 12px;
gap: 12px;
}
.site-title {
font-size: 1.1rem;
}
.site-logo img,
.custom-logo {
max-height: 50px;
}
.site-description {
font-size: 0.7rem;
}
/* ===== MOBILE MENU TOGGLE - TURCOAZ PE TELEFON MIC ===== */
.mobile-menu-toggle {
display: flex;
background: rgba(45, 166, 168, 0.12);
padding: 8px;
gap: 4px;
}
.hamburger-line {
width: 22px;
height: 2.5px;
background: #2da6a8; /* ✅ TURCOAZ SIGUR */
border-radius: 2px;
}
.mobile-menu-toggle.active .hamburger-line:nth-child(1) {
background: #2da6a8;
}
.mobile-menu-toggle.active .hamburger-line:nth-child(3) {
background: #2da6a8;
}
/* Mobile Menu - More compact */
.mobile-menu-content {
width: 95%;
max-width: 360px;
}
.mobile-menu-header {
padding: 16px;
}
.mobile-site-title {
font-size: 1.3rem;
}
.mobile-navigation {
padding: 16px;
}
.mobile-nav-menu a {
font-size: 1rem;
padding: 14px 10px;
}
.mobile-contact-info {
padding: 16px;
}
.mobile-cta-wrapper {
padding: 16px;
}
.mobile-social-links {
padding: 16px;
gap: 20px;
}
.mobile-social-links a {
width: 40px;
height: 40px;
}
}
/* ========================================
ANIMATIONS
======================================== */
@keyframes fadeInDown {
from {
opacity: 0;
transform: translateY(-20px);
}
to {
opacity: 1;
transform: translateY(0);
}
}
.site-header {
animation: fadeInDown 0.6s ease-out;
}
/* Performance optimizations */
@media (prefers-reduced-motion: reduce) {
.site-header,
.mobile-menu-toggle,
.hamburger-line,
.mobile-menu-wrapper,
.mobile-menu-content {
animation-duration: 0.01ms !important;
animation-iteration-count: 1 !important;
transition-duration: 0.01ms !important;
}
}
</style>
