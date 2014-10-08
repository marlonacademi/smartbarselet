(function(scope){
	scope.init = function(){
		$('.home').addClass('active');
		createFlotCustomers();
	};
	var createFlotCustomers = function (){
		$.ajax({
			url:'index/flotCustomer',
			dataType: 'json',
			success: function (json){
				console.log(json);
			},
			error: function(e){
				console.log(e.error());
			}
		});
	};
})(App);
App.init();