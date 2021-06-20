from selenium import webdriver
from selenium.webdriver.common.by import By
import time


try:
    driver = webdriver.Chrome("F:/TUGASS/Ryan/Semester 8/VVPL/functional-test/chromedriver")
    driver.maximize_window()
    driver.get("http://localhost/maridoc/C_Pasien/chat/c")
    time.sleep(2)

    # Beli obat
    e = driver.find_element(By.ID, "keluhan")
    e.send_keys("Punggung saya sakit dok")
    time.sleep(2)

    e = driver.find_element(By.ID, "send_keluhan")
    e.submit()
    time.sleep(2)

    # Asserting Condition
    # Jika URL Diarahkan ke Halaman Utama Maka Assert True
    # Jika URL Tidak Berubah Assert False
    # try:
    #     assert driver.current_url == "http://localhost/maridoc/C_Pasien/chat/c"
    #     print("Berhasil beli obat")
    # except AssertionError:
    #     print("Gagal beli Obat")

finally:
    if driver is not None:
        driver.close()