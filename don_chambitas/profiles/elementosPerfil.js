    // Variables por id
    const buttonAyuda = document.getElementById("ayuda");
    const buttonHistorial = document.getElementById("historial");
    const buttonConfiguracion = document.getElementById("config");
    const sectionInfo = document.getElementById("info");
    const sectionHistory = document.getElementById("history");
    const sectionConfiguration = document.getElementById("configuration");
    
    // Function para mostrar
    function showSection(section) {
      section.style.display = "block";
    }
    
    // AYUDA
    buttonAyuda.addEventListener("click", function() {
      showSection(sectionInfo);
      sectionHistory.style.display= "none";
      sectionConfiguration.style.display= "none";
    });
    
    // HISTORIAL
    buttonHistorial.addEventListener("click", function() {
      showSection(sectionHistory);
      sectionInfo.style.display = "none";
      sectionConfiguration.style.display = "none";
    });
    
    // CONFIGURATION
    buttonConfiguracion.addEventListener("click", function() {
      showSection(sectionConfiguration);
      sectionHistory.style.display = "none";
      sectionInfo.style.display="none"
    });
    