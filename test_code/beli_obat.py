from selenium import webdriver
from selenium.webdriver.common.by import By
import time


try:
    driver = webdriver.Chrome("F:/TUGASS/Ryan/Semester 8/VVPL/functional-test/chromedriver")
    driver.maximize_window()
    driver.get("http://localhost/maridoc/C_Pasien/tabkeranjang")
    time.sleep(2)

    # Input Username
    e = driver.find_element(By.ID, "beli_obat")
    e.click()
    time.sleep(2)

    # Asserting Condition
    # Jika URL Diarahkan ke Halaman Utama Maka Assert True
    # Jika URL Tidak Berubah Assert False
    # try:
    #     assert driver.current_url == "http://localhost/maridoc/C_Pasien"
    #     print("Assertion untuk Login Success!")
    # except AssertionError:
    #     print("Assertion untuk Login Failed!")

finally:
    if driver is not None:
        driver.close()