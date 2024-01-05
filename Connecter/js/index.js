$(document).ready(function() {

    $("#nav").hide();
    $("#numbervalue").html($("#number").val());
    $('#number').change(function() {
        $("#numbervalue").html($(this).val());
    });

    function getRecipes() {
        var ingredient = $("#ingredient").val();
        var link = "https://api.spoonacular.com/recipes/complexSearch?ingredients=";
            number ="&number=" + $("#number").val();
        var apikey = "&addRecipeInformation=true&apiKey=6a2524745e5b4193a7e1cc2ae0bc06df";
        $.getJSON(link + ingredient + number + apikey, function(data, status){
            console.log(data);
            var cards = "";
            $.each(data.results, function(index, recipe){
                cards += generateRecipeCard(recipe);
            });
            $("#results").slideUp(1000);
            $("#results").html(cards);
            $("#results").slideDown(1000);
        
        }, "html")};

        function getProductInformations() {
            var ingredient = $("#ingredient").val();
            var link = "https://api.spoonacular.com/food/products/search?query=";
                number ="&number=" + $("#number").val();
            var apikey = "&addProductInformation=true&apiKey=6a2524745e5b4193a7e1cc2ae0bc06df";
            $.getJSON(link + ingredient + number + apikey, function(data, status){
                console.log(data);
                var cards = "";
                $.each(data.products, function(index, product){
                    cards += generateProductCard(product);
                });
                $("#products").slideUp(1000);
                $("#products").html(cards);
                $("#products").slideDown(1000);
            
            }, "html")};

    function generateRecipeCard(recipe) {
        var card = "<div class='card' >" +
            "<img class='card-img-top' src='" + recipe.image + "' alt='Card image cap'>" +
            "<div class='card-body'>" +
            "<h5 class='card-title'>" + recipe.title + "</h5>" +
            "<p class='card-text small'>" + recipe.summary + " ingredients used</p>" +
            "<a href='" + recipe.sourceUrl + "' class='btn btn-primary'>Go to recipe</a>" +
            "</div>" +
            "</div>";
        return card;
    };

    function generateProductCard(product) {
        var nutrients = "";
        $.each(product.nutrition.nutrients, function(index, nutrient){
            nutrients += "<p class='card-text small'> <strong>" + nutrient.name + ":</strong> " + nutrient.amount + " " + nutrient.unit + " equals to " + nutrient.percentOfDailyNeeds + "% of daily needs.</p>";
        });
        var card = "<div class='card'>" +
            "<img class='card-img-top' src='" + product.image + "' alt='Card image cap'>" +
            "<div class='card-body'>" +
            "<h5 class='card-title'>" + product.title + "</h5>" +
            "<p class='card-text small'>" + product.generatedText + "</p>" +
            nutrients+
            "</div>" +
            "</div>";
        return card;
        
        };

    $("#ingredient").keypress(function(e) {
        if (e.which == 13) {
            getRecipes();
            getProductInformations();
        }
    });
    $("#button").click(function() {
        getRecipes();
        getProductInformations();
    });
});