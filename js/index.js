const getId = (featuredId) => {
  alert(featuredId);
  window.location.href = `/Step up/helpers/getFeaturedProducts.php?id=${featuredId}`;
};
