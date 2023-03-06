const getId = (featuredId) => {
  alert(featuredId);
  window.location.href = `/stepup/helpers/getFeaturedProducts.php?id=${featuredId}`;
};
