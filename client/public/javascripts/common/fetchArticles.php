<?php 
$relativeUri = str_replace(ROOT, '', $_SERVER['REQUEST_URI']);
$relativeUri = strtok($relativeUri, '?'); 
?>
<script type="module">

document.addEventListener('DOMContentLoaded', () => {
    const url = new URL(window.location.href);
    // Verificar si el parámetro 'page' ya existe en la URL, si no lo tiene, agregarlo
    if (!url.searchParams.has('page')) {
        url.searchParams.append('page', 1);
        window.history.replaceState(null, '', url.toString()); // Reemplaza la URL sin recargar la página
    }
});
async function getArticles() {
    let filter = document.querySelector('#busqueda-barra__input').value;
    let limit = document.querySelector('#page').value;
    let order = document.querySelector('input[name="orden"]:checked').value;
    
    const url = new URL(window.location.href);
    
    const qParams = new URLSearchParams(url.search);
    const paramsObj = Object.fromEntries(qParams.entries());
    const pathName= "<?= $relativeUri ?>";

    let body = JSON.stringify({ filter, limit, order, pathName,qParams: paramsObj });
    let container = document.querySelector('.busqueda__resultados');
    let linkContainer = document.querySelector('.paginacion__links');

    try {
        let response = await fetch('api/articles', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: body
        });

        if (response.ok) {
            const result = await response.json();
            container.innerHTML = result.articles;
            linkContainer.innerHTML = result.links;
            // const result = await response.text();
            // container.innerHTML = result;

        }
    } catch (e) { console.log(e); }
}

getArticles();

document.querySelector('#busqueda-barra__input').addEventListener('input', getArticles);
document.querySelector('#page').addEventListener('change', getArticles);
document.querySelectorAll('input[name="orden"]').forEach((radio) => {
    radio.addEventListener('change', getArticles);
});

/* redirigir el elemento clickado a la url correspondiente */
document.querySelectorAll('.busqueda__resultados .article').forEach((link) => {
    link.addEventListener('click', (event) => {
        event.preventDefault();
        const id = link.getAttribute('data-id')
        window.location.href = `<?= BASE_URL ?>reading/${id}`
    })
})

</script>