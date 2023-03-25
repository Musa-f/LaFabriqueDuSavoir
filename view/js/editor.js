ClassicEditor
.create( document.querySelector( '.editor' ), {
	licenseKey: '',
})

.then( editor => {
	window.editor = editor;
})

.catch( error => {
	console.error( 'Oops, something went wrong!' );
	console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
	console.warn( 'Build id: sw8p476n5zby-9254gyxyo5dc' );
	console.error( error );
});
