/**
 * Passa os dados do livro para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget);
	var id = button.data('book');
	var modal = $(this);
	
	modal.find('.modal-title').text('Excluir Livro #' + id);
	modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})