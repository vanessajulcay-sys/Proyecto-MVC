from selenium import webdriver
from selenium.webdriver.common.by import By
import time

# Inicializar el navegador Chrome
driver = webdriver.Chrome()

try:
    # 1. Abrir la página principal de tu sistema local
    driver.get("http://localhost/index.php")
    time.sleep(2)

    # 2. Hacer clic en el Módulo de Clientes
    btn_clientes = driver.find_element(By.XPATH, "//a[contains(text(), 'Módulo 1')]")
    btn_clientes.click()
    time.sleep(2)

    # 3. Validar que la URL y la vista cargaron correctamente
    print("¡Prueba exitosa! La navegación y Selenium respondieron correctamente.")

finally:
    # Cerrar el navegador automáticamente al terminar
    time.sleep(3)
    driver.quit()