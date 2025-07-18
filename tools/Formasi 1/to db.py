import json
import sqlite3

# Baca JSON
with open("E:/Voucher Selebrasi/Formasi 1/formasi1.json", "r", encoding="utf-8") as f:
    data = json.load(f)


# Koneksi ke database Laravel
with sqlite3.connect("e:/Voucher Selebrasi/VoucherSelebrasi/database/database.sqlite") as conn:
    cursor = conn.cursor()
    cursor.execute('''
        CREATE TABLE IF NOT EXISTS formasi1 (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            warna TEXT,
            baris TEXT,
            kolom INTEGER
        )
    ''')

    for item in data:
        cursor.execute('''
            INSERT INTO formasi1 (warna, baris, kolom) VALUES (?, ?, ?)
        ''', (item["warna"], item["baris"], item["kolom"]))

    conn.commit()
