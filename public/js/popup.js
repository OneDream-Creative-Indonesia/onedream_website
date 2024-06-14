function openPopup() {
    document.getElementById("popup").style.display = "block";
  }
  
  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }
  
  function showPopupAutomatically() {
    setTimeout(function() {
      openPopup();
    }, 5000); // Waktu dalam milidetik (5 detik dalam contoh ini)
  };
  
  showPopupAutomatically();
  
  function saveTestimoniToDatabase(data) {
    // Lakukan permintaan AJAX atau Fetch untuk menyimpan data testimoni ke database (PHP).
    // Di sini, kita akan menggunakan fetch API untuk mengirim data ke server.
  
    const url = "../api/save_testimoni.php"; // Ganti dengan URL skrip PHP Anda.
    const options = {
      method: "POST",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(data)
    };
  
    fetch(url, options)
      .then(response => response.json())
      .then(data => {
        // Lakukan sesuatu setelah data tersimpan, jika diperlukan.
      })
      .catch(error => {
        console.error("Error:", error);
      });
      
  }
  