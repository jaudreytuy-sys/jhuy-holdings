# JHUY Holdings Website — Version 3, September 2026 Update

This package contains the updated deployment candidate for jhuy.ph.

## Included pages

- `index.html` — JHUY Holdings homepage with About, Companies and Partner Network sections
- `transport.html` — JHUY Transport
- `fruit.html` — JHUY Fruit
- `contact.html` — inquiry form
- `send-inquiry.php` — server-side inquiry routing for JHUY Transport and JHUY Fruit

## September 2026 changes

- JHUY Transport positioning updated to **“Transporting Solutions Through Renewable Energy.”**
- Previous JHUY Transport references that implied courier-style or freight-request services have been removed.
- TOP-1 partner logo now links to `https://www.facebook.com/jhuyfruit`.
- The former “Let’s Connect” homepage section has been replaced by a quieter **Explore JHUY** navigation section.
- The new JHUY Holdings logo is used in the website header with a transparent background asset.
- Telephone details and the previous main-office reference have been removed.
- JHUY Transport now includes a Facebook contact row linking to the supplied profile.
- JHUY Fruit email is now `juicylandmktg@yahoo.com`.
- The inquiry form contains only JHUY Transport and JHUY Fruit and routes submissions server-side to the selected company.

## Inquiry routing

`send-inquiry.php` routes form submissions as follows:

- JHUY Transport → `jhuytransport@gmail.com`
- JHUY Fruit → `juicylandmktg@yahoo.com`

The handler uses PHP's built-in `mail()` function. On Hostinger or another PHP host, confirm that PHP mail is enabled and perform live test submissions after upload. Email authentication and server configuration can affect inbox placement.

## Deployment

1. Back up any existing web files and DNS records before changing the live site.
2. Upload the contents of this folder into the web root (commonly `public_html`).
3. Keep the `assets` directory structure unchanged.
4. Make sure the host is running PHP so `send-inquiry.php` can process the form.
5. Test both inquiry selections and confirm receipt at both destination inboxes.
6. Test the website on desktop and mobile before switching the production domain.

## Brand and partner note

Partner logos and relationship wording should continue to follow JHUY's approved commercial relationships and each partner's brand-usage requirements.
