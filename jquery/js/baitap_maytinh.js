$(function() {
			$('.box-1 .enter').attr('disabled', true);
			$('.box-1 .result').attr('disabled', true);
			$('.box-2 .nhan').attr('disabled', true);
			$('.box-2 .chia').attr('disabled', true);
			$('.box-2 .equal').attr('disbled', true);
			$('.box-2 button.number').click(function() {
				let number = $(this).html();
				let enter =  $('.enter').val();
				$('.enter').val(enter + number);
				$('.box-2 .operation').attr('disabled', false);
				$('.box-2 .equal').removeAttr('disbled');
			});
			
			$('.box-2 button.dot').click(function() {
				let dot = $(this).val();
				let enter = $('.enter').val();
				$('.enter').val(enter + dot);
				$('.box-2 .operation').attr('disabled', true);
				$(this).attr('disabled', true);
			});
			
			$('.box-2 button.refresh').click(function() {
				$('.box-1 .enter').val('');
				$('.box-1 .result').val('');
			});
			
			$('.box-2 button.del').click(function() {
				let enter = $('.enter').val();
				$('.box-1 .enter').val(enter.substring(0, enter.length - 1));
			});
			
			$('.box-2 button.operation').click(function() {
				let operation = $(this).html();
				let enter = $('.enter').val();
				$('.box-1 .enter').val(enter + operation);
				$('.box-2 button.nhan').attr('disabled', true);
				$('.box-2 button.chia').attr('disabled', true);
				$('.box-2 button.dot').removeAttr('disabled');
			});
			
			$('.box-2 button.tru').click(function() {
				$('.box-2 button.cong').attr('disabled', true);
				$('.box-2 button.tru').attr('disabled', true);
			});
			
			$('.box-2 button.cong').click(function() {
				$('.box-2 button.cong').attr('disabled', true);
				$('.box-2 button.tru').attr('disabled', true);
			});
			
			$('.box-2 button.equal').click(function() {
				let result = $('.enter').val();
				$('.result').val(eval(result));
			});
		});