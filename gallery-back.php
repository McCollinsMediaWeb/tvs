<?php
/*
Template Name: gallery-english
*/

get_header(); // Include the header

?>

<main>
        <section class="galleryFilterBox bg1">
            <div class="container">
              <div class="GalleryItemSliderWrap">
                <div class="GalleryItemSlider">
                  <button class="GalleryFilterItemButton active" data-filter="All List">All List</button>
                  <button class="GalleryFilterItemButton" data-filter="All Videos">All Videos</button>
                  <button class="GalleryFilterItemButton" data-filter="All Images">All Images</button>
                  <button class="GalleryFilterItemButton" data-filter="Duty Free">Duty Free</button>
                  <button class="GalleryFilterItemButton" data-filter="Signage">Signage</button>
                  <button class="GalleryFilterItemButton" data-filter="Shop Fit-Out (Store Fitting)">Shop Fit-Out (Store Fitting)</button>
                  <button class="GalleryFilterItemButton" data-filter="Window Displays">Window Displays</button>
                  <button class="GalleryFilterItemButton" data-filter="Permanent Displays">Permanent Displays</button>
                  <button class="GalleryFilterItemButton" data-filter="Displays">Displays</button>
                  <button class="GalleryFilterItemButton" data-filter="Fibre Glass / Art & Sculptures">Fibre Glass / Art & Sculptures</button>
                  <button class="GalleryFilterItemButton" data-filter="Custom Exhibition Stands">Custom Exhibition Stands</button>
                  <button class="GalleryFilterItemButton" data-filter="Custom Kiosks">Custom Kiosks</button>
                  <button class="GalleryFilterItemButton" data-filter="Large Format Printing / Flatbed">Large Format Printing / Flatbed</button>
                  <button class="GalleryFilterItemButton" data-filter="Theme Park Installations">Theme Park Installations</button>
                </div>
              </div>
            </div>
          </section>
          
          <section class="galleryItemsBox">
            <div class="container">
              <div class="row galleryItems"></div>
              <div class="col-md-12">
                <div class="LoadMoreButton">Load More Items</div>
              </div>
            </div>
          </section>
<script>
  const mediaList = [
  {
    LinkURL: "https://www.youtube.com/watch?v=IgX1SbP-rkg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/royal.jpg",
  categories: "All Videos",
  URLtype: "video",
  },
  {
    LinkURL: "https://www.youtube.com/watch?v=IL2mcFH2cVw&t=4s",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/kinder.jpg",
  categories: "All Videos",
  URLtype: "video",
  },
    {
    LinkURL: "https://www.youtube.com/watch?v=msDvhy3jtwg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/johnywalker.jpg",
  categories: "All Videos",
  URLtype: "video",
  },
    {
    LinkURL: "https://www.youtube.com/watch?v=tuIhrEF3TRQ",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/turretpunch.jpg",
  categories: "All Videos",
  URLtype: "video",
  },
    {
    LinkURL: "https://www.youtube.com/watch?v=NJzddojJD9I",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/capabilities-home.jpg",
  categories: "All Videos",
  URLtype: "video",
  },
    {
    LinkURL: "https://www.youtube.com/watch?v=IL2mcFH2cVw&t=4s",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/ar-vr-services.jpg",
  categories: "All Videos",
  URLtype: "video",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0189-2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0189-2.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0190.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0190.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0185-2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0185-2.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0178-2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0178-2.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0180-1.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0180-1.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0181-1.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0181-1.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0182-2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0182-2.jpg",
  categories: "All Images, Window Displays, Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_44d9bd24.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_44d9bd24.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_51e8540c.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_51e8540c.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_fa86d1f8.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_fa86d1f8.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_72ffbf8c.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_72ffbf8c.jpg",
  categories: "All Images, Permanent Displays , Displays , Custom Kiosks",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_4619bde2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_4619bde2.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_4619bde2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.23_f0d0f1ac.jpg",
  categories: "All Images, Permanent Displays , Displays , Custom Kiosks",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_9c4bcf5e.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.24_9c4bcf5e.jpg",
  categories: "All Images, Permanent Displays , Displays , Custom Kiosks",
  URLtype: "image",
  },
  
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.47.21_8e1bfe00.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.47.21_8e1bfe00.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.47.20_e5e49401.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.47.20_e5e49401.jpg",
  categories: "All Images, Permanent Displays , Displays , Custom Kiosks",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.47.21_f1790f2a.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.47.21_f1790f2a.jpg",
  categories: "All Images, Permanent Displays , Displays , Custom Kiosks",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.23_98a28d99.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-04-15-at-16.46.23_98a28d99.jpg",
  categories: "All Images, Permanent Displays , Displays , Custom Kiosks",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.46_aeb4bb42.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.46_aeb4bb42.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.44_e42cc7e9.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.44_e42cc7e9.jpg",
  categories: "All Images, Permanent Displays , Displays , Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
   {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.45_8e710878.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.45_8e710878.jpg",
  categories: "All Images, Permanent Displays , Displays , Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
   {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.47_2141ff97.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.47_2141ff97.jpg",
  categories: "All Images, Permanent Displays , Displays , Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
   {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.44_4dc9b416.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-05-at-11.01.44_4dc9b416.jpg",
  categories: "All Images, Permanent Displays , Displays , Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
   {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-03-22-at-10.22.12_da0eb339.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-03-22-at-10.22.12_da0eb339.jpg",
  categories: "All Images, Permanent Displays , Displays , Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
   {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-03-22-at-10.22.11_6f94457a.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-03-22-at-10.22.11_6f94457a.jpg",
  categories: "All Images, Permanent Displays , Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
{
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0190.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0190.jpg",
  categories: "All Images, Permanent Displays , Displays ",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0185-2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0185-2.jpg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0178-2.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0178-2.jpg",
  categories: "All Images, Permanent Displays , Displays ",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0180-1.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0180-1.jpg",
  categories: "All Images, Permanent Displays , Displays  ",
  URLtype: "image",
  },
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0181-1.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0181-1.jpg",
  categories: "All Images, Permanent Displays , Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
//   New
  {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-03-22-at-14.53.52_8cfe9799.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-03-22-at-14.53.52_8cfe9799.jpg",
  categories: "All Images, Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6383-min-scaled-e1706879374598.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6383-min-scaled-e1706879374598.jpg",
  categories: "All Images, Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6395-min-scaled.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6395-min-scaled.jpg",
  categories: "All Images",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6401-min.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6401-min.jpg",
  categories: "All Images",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6421-min.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6421-min.jpg",
  categories: "All Images, Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6439-min.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6439-min.jpg",
  categories: "All Images, Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6448-min-scaled.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6448-min-scaled.jpg",
  categories: "All Images, Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6467-min-scaled.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/081A6467-min-scaled.jpg",
  categories: "All Images, Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-01-at-15.01.01_baf7d573.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-01-at-15.01.01_baf7d573.jpg",
  categories: "All Images,  Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-01-at-15.00.37_d29552ad.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2024-02-01-at-15.00.37_d29552ad.jpg",
  categories: "All Images, Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-10-21-at-12.30.14-2.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-10-21-at-12.30.14-2.jpeg",
  categories: "All Images, Custom Kiosks",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-10-21-at-12.30.12-2.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-10-21-at-12.30.12-2.jpeg",
  categories: "All Images, Custom Kiosks",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-10-21-at-12.30.10-2.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-10-21-at-12.30.10-2.jpeg",
  categories: "All Images, Custom Kiosks",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.25.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.25.jpeg",
  categories: "All Images, Permanent Displays , Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.22.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.22.jpeg",
  categories: "All Images,  Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0181-1.jpg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/IMG-20240521-WA0181-1.jpg",
  categories: "All Images,  Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.21.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.21.jpeg",
  categories: "All Images,  Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.20-1.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-09-at-17.50.20-1.jpeg",
  categories: "All Images, Permanent Displays , Displays",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-08-at-15.59.21.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-08-at-15.59.21.jpeg",
  categories: "All Images, Permanent Displays , Displays ",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-08-at-15.59.19.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/WhatsApp-Image-2023-11-08-at-15.59.19.jpeg",
  categories: "All Images, Permanent Displays , Displays ,  Fibre Glass / Art & Sculptures",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-3.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-3.jpeg",
  categories: "All Images, Displays , Window Displays",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-4.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-4.jpeg",
  categories: "All Images, Displays , Window Displays",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-5.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-5.jpeg",
  categories: "All Images, Displays , Window Displays",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-7.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-7.jpeg",
  categories: "All Images, Displays , Window Displays",
  URLtype: "image",
  },
    {
    LinkURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-7.jpeg",
  ThumbURL: "https://mccollinsmediaweb.github.io/tvs/assets/gallery/Window-display-and-Interiorfit-out-7.jpeg",
  categories: "All Images, Displays , Window Displays",
  URLtype: "image",
  },
 
  
  // Add remaining items as per your data
  ];

</script>
      <?php include(get_template_directory() . '/modules/english-modules/getintouch.php'); ?>
      <?php include(get_template_directory() . '/modules/english-modules/instagram-block.php'); ?>
      
    </main>

<?php
get_footer(); // Include the footer
?>
