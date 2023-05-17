import Dropzone from 'dropzone';
Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone',
{
    dictDefaultMessage: 'Da clic para subir fotografía', 
    acceptedFiles: '.png,.jpg,.jpeg,.gif',
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar fotografia',
    maxFiles:1,
    uploadMultiple:false,

    init:function(){
        if(document.querySelector('[name="imagen"]').value.trim()){
            const imagenpublicada = {};
            imagenpublicada.size = 1234;
            imagenpublicada.name = document.querySelector('[name="imagen"]').value.trim();

            this.options.addedfile.call(this,imagenpublicada);

            this.options.thumbnail.call(this,imagenpublicada,`/uploads/${imagenpublicada.name}`);

            imagenpublicada.previewElement.classList.add(
                "dz-success","dz-complete"
                );
        }
    }

});

dropzone.on('removedfiles', function()
{
    document.querySelector('[name="imagen"]').value = "";
});

dropzone.on('success', function(file,response)
{
    document.querySelector('[name="imagen"]').value = response.imagen;
});

