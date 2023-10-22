//Slug automático
document.getElementById("name").addEventListener('keyup', slugChange);

function slugChange(){

    name = document.getElementById("name").value;
    document.getElementById("slug").value = slug(name);

}

function slug (str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
        str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
        .replace(/\s+/g, '-') // collapse whitespace and replace by -
        .replace(/-+/g, '-'); // collapse dashes

    return str;
}

/* function slug (str) {
    var $slug = '';
    var trimmed = str.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
    replace(/-+/g, '-').
    replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}
 */

//CKEDITOR

ClassicEditor
.create( document.querySelector( '#mensaje' ), {
    toolbar: ['bold', 'italic', 'bulletedList'],
} )
.catch( error => {
    console.log( error );
} );

/* ClassicEditor
.create( document.querySelector( '#resumen' ), {
    toolbar: ['bold', 'italic', 'bulletedList'],
} )
.catch( error => {
    console.log( error );
} ); */

/* ClassicEditor
.create( document.querySelector( '#seoDescription' ), {
    toolbar: ['bold', 'italic', 'bulletedList'],
} )
.catch( error => {
    console.log( error );
} ); */

/* ClassicEditor
    .create( document.querySelector( '#visitante' ), {
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
} ); */

/* ClassicEditor
    .create( document.querySelector( '#historia' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link','bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
} ); */





//Cambiar imagen
document.getElementById("file").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result);
    };

    reader.readAsDataURL(file);
}



