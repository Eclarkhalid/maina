const recipes = [];

function createRecipe() {
    const recipeName = document.getElementById('recipeName').value;
    const description = document.getElementById('description').value;
    const ingredients = document.getElementById('ingredients').value;
    const instructions = document.getElementById('instructions').value;

    const newRecipe = {
        recipeName,
        description,
        ingredients,
        instructions,
    };

    recipes.push(newRecipe);
    displayRecipes();

    document.getElementById('addRecipeForm').reset();
    const addRecipeModal = new bootstrap.Modal(document.getElementById('addRecipeModal'));
    addRecipeModal.hide();
}

function displayRecipes() {
    const recipeList = document.getElementById('recipeList');
    recipeList.innerHTML = '';

    recipes.forEach(recipe => {
        const cardDiv = document.createElement('div');
        cardDiv.classList.add('col-lg-4', 'mb-4');

        const cardHTML = `
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">${recipe.recipeName}</h5>
                    <p class="card-text">${recipe.description}</p>
                    <p class="card-text"><strong>Ingredients:</strong><br>${recipe.ingredients}</p>
                    <p class="card-text"><strong>Instructions:</strong><br>${recipe.instructions}</p>
                </div>
            </div>
        `;
        cardDiv.innerHTML = cardHTML;
        recipeList.appendChild(cardDiv);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    const saveRecipeButton = document.getElementById('saveRecipeButton');
    saveRecipeButton.addEventListener('click', createRecipe);
});

