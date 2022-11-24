const getId = (featuredId) => {
    alert(featuredId);
        window.location.href = `/shoestop/helpers/getFeaturedProducts.php?id=${featuredId}`;
};
