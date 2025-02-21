$(document).ready(function() {
    $('#submitBtn').click(function() {
      const formData = $('#colorForm').serialize(); // Mengambil data form
  
      $.ajax({
        url: 'process.php',
        type: 'POST',
        data: formData,
        success: function(response) {
          $('#result').html(response); // Menampilkan hasil di div #result
        }
      });
    });
  });
  