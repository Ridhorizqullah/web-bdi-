---
name: Institutional Clarity
colors:
  surface: '#f8f9ff'
  surface-dim: '#cbdbf5'
  surface-bright: '#f8f9ff'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#eff4ff'
  surface-container: '#e5eeff'
  surface-container-high: '#dce9ff'
  surface-container-highest: '#d3e4fe'
  on-surface: '#0b1c30'
  on-surface-variant: '#434655'
  inverse-surface: '#213145'
  inverse-on-surface: '#eaf1ff'
  outline: '#737686'
  outline-variant: '#c3c6d7'
  surface-tint: '#0053db'
  primary: '#004ac6'
  on-primary: '#ffffff'
  primary-container: '#2563eb'
  on-primary-container: '#eeefff'
  inverse-primary: '#b4c5ff'
  secondary: '#ba0035'
  on-secondary: '#ffffff'
  secondary-container: '#e21e49'
  on-secondary-container: '#fffbff'
  tertiary: '#525657'
  on-tertiary: '#ffffff'
  tertiary-container: '#6b6e70'
  on-tertiary-container: '#eff1f3'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#dbe1ff'
  primary-fixed-dim: '#b4c5ff'
  on-primary-fixed: '#00174b'
  on-primary-fixed-variant: '#003ea8'
  secondary-fixed: '#ffdada'
  secondary-fixed-dim: '#ffb3b6'
  on-secondary-fixed: '#40000c'
  on-secondary-fixed-variant: '#920028'
  tertiary-fixed: '#e0e3e5'
  tertiary-fixed-dim: '#c4c7c9'
  on-tertiary-fixed: '#191c1e'
  on-tertiary-fixed-variant: '#444749'
  background: '#f8f9ff'
  on-background: '#0b1c30'
  surface-variant: '#d3e4fe'
typography:
  h1:
    fontFamily: Public Sans
    fontSize: 40px
    fontWeight: '700'
    lineHeight: '1.2'
  h2:
    fontFamily: Public Sans
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.3'
  h3:
    fontFamily: Public Sans
    fontSize: 24px
    fontWeight: '600'
    lineHeight: '1.4'
  body-lg:
    fontFamily: Public Sans
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
  body-md:
    fontFamily: Public Sans
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
  label-sm:
    fontFamily: Public Sans
    fontSize: 14px
    fontWeight: '500'
    lineHeight: '1.4'
    letterSpacing: 0.02em
  button:
    fontFamily: Public Sans
    fontSize: 16px
    fontWeight: '600'
    lineHeight: '1'
    letterSpacing: 0.01em
rounded:
  sm: 0.125rem
  DEFAULT: 0.25rem
  md: 0.375rem
  lg: 0.5rem
  xl: 0.75rem
  full: 9999px
spacing:
  base: 8px
  xs: 4px
  sm: 12px
  md: 24px
  lg: 48px
  xl: 80px
  container-max: 1280px
  gutter: 24px
---

## Brand & Style

The design system is anchored in the principles of transparency, efficiency, and civic trust. It adopts a **Corporate / Modern** aesthetic that leans heavily into **Minimalism** to ensure that information density remains manageable for a diverse citizenry.

The visual language communicates authority without being intimidating. By utilizing generous whitespace, a structured color palette, and high-contrast elements, the system ensures that complex government processes feel intuitive and accessible. The overall goal is to foster a sense of reliability through precise alignment, consistent iconography, and a refined interface that prioritizes the user's task over decorative flourish.

## Colors

The palette is designed for high legibility and institutional recognition. 

- **Primary Blue (#2563EB):** Used for navigation, primary actions, and branding. It represents stability and trust.
- **Accent Rose (#E11D48):** Reserved exclusively for high-priority calls to action, such as 'Pendaftaran' or urgent alerts, providing a clear visual hook without overwhelming the layout.
- **Neutral Scale:** The system utilizes a range of grays from a soft border color (#E2E8F0) to deep charcoal for body text (#1E293B). 
- **Backgrounds:** Pure white (#FFFFFF) is the primary canvas, with very light gray (#F8FAFC) used for sectioning content or subtle container fills.

Accessibility is paramount; all color combinations must meet WCAG AA standards for contrast ratios.

## Typography

The design system utilizes **Public Sans**, an open-source typeface designed specifically for government interfaces. Its neutral, clean geometry ensures readability across various screen sizes and resolutions.

- **Headlines:** Use bold weights (700) to establish clear information hierarchy.
- **Body Text:** Set at 16px for standard content to optimize reading comfort.
- **Letter Spacing:** Headlines utilize slightly tighter tracking, while smaller labels and buttons use increased tracking to maintain legibility in condensed spaces.
- **Hierarchy:** Contrast is created through weight and scale rather than decorative font pairings, maintaining a disciplined, official tone.

## Layout & Spacing

This design system follows a **Fixed Grid** model for desktop, centered on a 1280px maximum container width. 

- **Grid System:** A 12-column grid with 24px gutters is the standard for content organization.
- **Spacing Rhythm:** An 8px base unit (linear scale) governs all padding and margins. This ensures vertical rhythm and consistent density throughout the portal.
- **Sectioning:** Large sections are separated by `xl` (80px) spacing to prevent visual clutter and allow the user's eyes to rest.
- **Internal Padding:** Components use `sm` (12px) or `md` (24px) internal padding to maintain a spacious, modern feel.

## Elevation & Depth

To maintain a clean and professional appearance, the design system avoids heavy shadows. Instead, it uses **Ambient Shadows** and **Low-contrast Outlines**.

- **Surface Layers:** The primary background is flat. Secondary containers (like cards or sidebars) are defined by a 1px border (#E5E7EB) and a very subtle, diffused shadow (0px 4px 6px -1px rgba(0, 0, 0, 0.05)).
- **Interactive States:** On hover, buttons and interactive cards experience a slight increase in shadow depth and a subtle Y-axis lift (1-2px) to provide tactile feedback.
- **Floating Elements:** Modals and dropdown menus use a more pronounced "Large" shadow to establish clear z-axis dominance over the main content.

## Shapes

The shape language of the design system is **Soft**, striking a balance between the rigidity of traditional government forms and the approachability of modern web applications.

- **Standard Radius:** 4px (0.25rem) is the default for input fields, buttons, and small components.
- **Large Radius:** 8px (0.5rem) is used for cards and main content containers to soften the overall layout.
- **Consistency:** All interactive elements must share these radii to maintain a cohesive visual identity. Sharp corners are avoided to reduce visual "hardness" and make the portal feel more user-friendly.

## Components

### Buttons
Buttons are the primary drivers of action. 
- **Primary:** Solid Blue (#2563EB) with white text.
- **Accent (Pendaftaran):** Solid Rose (#E11D48) with white text, used sparingly for registrations.
- **Secondary:** White background with a 1px Gray border and Blue text.
- **States:** All buttons include a 10% darken effect on hover and a subtle shadow lift.

### Input Fields
Inputs are clean and functional. They feature a 1px border (#D1D5DB) that shifts to Primary Blue on focus. Error states use a distinct red border with helper text below the field.

### Navigation Links
Refined navigation is achieved through Public Sans Medium. Hover states are signaled by a color shift to Primary Blue and a subtle 2px bottom border (underline) to ensure clear orientation.

### Cards
Cards are used to group related services or news. They feature a white background, a soft gray border, and a subtle shadow. Typography inside cards follows the hierarchy established in the typography section, with titles in `h3` or `label-sm` weights.

### Chips/Tags
Used for status indicators (e.g., "Aktif", "Proses"). Chips use low-saturation background colors with high-saturation text of the same hue to ensure they are visible but subordinate to primary actions.