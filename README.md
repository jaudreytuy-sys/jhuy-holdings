# JHUY Holdings Website — Version 3

Version 3 is a production-oriented static website designed to replace the current jhuy.ph site while remaining easy to deploy on Hostinger or any conventional web host.

## Included pages
- `index.html` — JHUY Holdings corporate homepage
- `transport.html` — JHUY Transport
- `fruit.html` — JHUY Fruit
- `contact.html` — Group contact / inquiry page

## Included assets
- Official JHUY Transport logo supplied by JHUY
- Official JHUY Fruit logo supplied by JHUY
- JHUY Transport partner logos: Dawnice, MPD Solar, AE Solar, BAW International, AUSTA
- JHUY Fruit partner logos: Unifrutti, TOP-1, Sunkist, Costa, Vitor Australia's Best

## Content migrated from the original jhuy.ph site
- JHUY Transport EV / Greater Metro Manila positioning
- Transport services: same-day parcel delivery, clean-energy delivery, smart logistics
- JHUY Fruit importer / premium imported fruit positioning
- Manila, Laguna and Pampanga fruit locations
- Existing customer testimonials (shortened in this version)
- Existing public contact details and business hours

## Important items before public launch
1. Confirm that `JHUY Holdings` is the approved public parent-company name and wording.
2. Confirm the exact commercial designation for each partner (supplier, distributor, dealer, technology partner, etc.).
3. Confirm permission / brand guidelines for displaying partner logos.
4. Replace the Gmail address with a branded `@jhuy.ph` address when available.
5. Connect `contact.html` to a real form-delivery service. The current form UI is a front-end demo only.
6. Review customer testimonials for current permission and accuracy.
7. Add original JHUY photography when available.

## Deploy to Hostinger
Because this is static HTML, deployment is simple:
1. Create a new Hostinger hosting plan under an account JHUY controls.
2. Open File Manager and locate `public_html`.
3. Back up or clear the default contents.
4. Upload the contents of this Version 3 folder (not the parent folder itself) into `public_html`.
5. Ensure `index.html` is directly inside `public_html`.
6. Point `jhuy.ph` DNS to the new Hostinger hosting plan when ready.
7. Enable SSL and test `https://jhuy.ph`, `transport.html`, `fruit.html`, and `contact.html` on mobile and desktop.

## Zero-downtime cutover recommendation
Keep the current website live while this version is uploaded to the new hosting account or a temporary preview domain. Only change DNS after final review. Retain a copy of current DNS records before any change, especially MX/TXT records used by email.

## August 29, 2026 update
- Enlarged/cropped the MPD Solar and TOP-1 display assets for visual consistency with adjacent partner logos.
- Added external links to all Transport and Fruit partner logos on the homepage and subsidiary pages; links open in a new tab with safe `rel` attributes.
- Added curated image galleries to JHUY Transport and JHUY Fruit using the supplied project, product and sourcing imagery.
