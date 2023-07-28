<?php
include_once 'nav.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Recipes</title>
    <!-- Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-3 mb-4">Recipes</h1>
        <div class="row" id="recipeList"></div>

        <div class="mt-4">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addRecipeModal">Add Recipe</button>
        </div>
    </div>

    <!-- Add Recipe Modal -->
    <div class="modal fade" id="addRecipeModal" tabindex="-1" aria-labelledby="addRecipeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRecipeModalLabel">Add Recipe</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addRecipeForm">
                        <div class="mb-3">
                            <label for="recipeName" class="form-label">Recipe Name</label>
                            <input type="text" class="form-control" id="recipeName" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="ingredients" class="form-label">Ingredients</label>
                            <textarea class="form-control" id="ingredients" rows="5" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="instructions" class="form-label">Instructions</label>
                            <textarea class="form-control" id="instructions" rows="5" required></textarea>
                        </div>
                        <button type="button" class="btn btn-primary" id="saveRecipeButton">Save Recipe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h1 class="mt-3 mb-4"></h1>
        <div class="row d-flex flex-wrap" id="recipeList">
            <!-- Recipe Cards -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Delicious Pancakes</h5>
                        <p class="card-text">A classic and fluffy pancake recipe</p>
                        <p class="card-text"><strong>Ingredients:</strong><br>1 cup all-purpose flour, 2 tablespoons sugar, 2 teaspoons baking powder, 1/2 teaspoon salt, 1 cup milk, 1 large egg, 2 tablespoons melted butter</p>
                        <p class="card-text"><strong>Instructions:</strong><br>In a large bowl, whisk together flour, sugar, baking powder, and salt. In a separate bowl, whisk together milk, egg, and melted butter. Pour the wet ingredients into the dry ingredients and mix until just combined. Heat a griddle or non-stick skillet over medium heat. Pour 1/4 cup of batter onto the griddle for each pancake. Cook until bubbles form on the surface, then flip and cook until golden brown.</p>
                        <p class="card-text"><strong>Author:</strong> John Doe</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Spaghetti Bolognese</h5>
                        <p class="card-text">A classic Italian pasta dish</p>
                        <p class="card-text"><strong>Ingredients:</strong><br>8 oz spaghetti, 1 lb ground beef, 1 onion (chopped), 2 cloves garlic (minced), 1 can crushed tomatoes, 1/4 cup tomato paste, 1 teaspoon dried oregano, 1 teaspoon dried basil, Salt and pepper to taste, Grated Parmesan cheese (for garnish)</p>
                        <p class="card-text"><strong>Instructions:</strong><br>Cook the spaghetti according to package instructions. In a large skillet, cook the ground beef over medium-high heat until browned. Add chopped onion and minced garlic, and cook until onion is softened. Stir in crushed tomatoes, tomato paste, oregano, basil, salt, and pepper. Simmer for 15-20 minutes. Serve the Bolognese sauce over the cooked spaghetti. Garnish with grated Parmesan cheese.</p>
                        <p class="card-text"><strong>Author:</strong> Jane Doe</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Chip Cookies</h5>
                        <p class="card-text">A classic cookie recipe with chocolate chips</p>
                        <p class="card-text"><strong>Ingredients:</strong><br>1 cup unsalted butter (softened), 1 cup granulated sugar, 1 cup brown sugar (packed), 2 large eggs, 1 teaspoon vanilla extract, 3 cups all-purpose flour, 1 teaspoon baking soda, 1/2 teaspoon salt, 2 cups chocolate chips</p>
                        <p class="card-text"><strong>Instructions:</strong><br>Preheat oven to 375°F (190°C). In a large mixing bowl, cream together softened butter, granulated sugar, and brown sugar until smooth. Beat in eggs and vanilla extract. In a separate bowl, whisk together flour, baking soda, and salt. Gradually add the dry ingredients to the wet ingredients and mix until well combined. Stir in the chocolate chips. Drop rounded tablespoons of dough onto a baking sheet lined with parchment paper. Bake for 9-11 minutes or until the edges are golden brown. Allow cookies to cool on the baking sheet for a few minutes before transferring to a wire rack to cool completely.</p>
                        <p class="card-text"><strong>Author:</strong> James Smith</p>
                    </div>
                </div>
            </div>
            <!-- End of Recipe Cards -->
        </div>
    </div>

    <!-- Bootstrap JavaScript and Popper.js scripts (required for Bootstrap components) 

    <!-- Bootstrap JavaScript and Popper.js scripts (required for Bootstrap components) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
    <script src="recipe.js"></script>
</body>
</html>
