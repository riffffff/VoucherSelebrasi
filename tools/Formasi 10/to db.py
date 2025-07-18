import json
import sqlite3

# Buka file JSON
with open("E:/Voucher Selebrasi/Formasi 10/formasi.json", "r", encoding="utf-8") as f:
    data = json.load(f)

# Koneksi ke database SQLite
with sqlite3.connect("e:/Voucher Selebrasi/VoucherSelebrasi/database/database.sqlite") as conn:
    cursor = conn.cursor()
# Buat tabel yang sesuai dengan struktur JSON
cursor.execute('''
    CREATE TABLE IF NOT EXISTS formasi10 (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        warna TEXT,
        baris TEXT,
        kolom INTEGER
    )
''')

# Masukkan data dari JSON ke tabel
for item in data:
    cursor.execute('''
        INSERT INTO formasi10 (warna, baris, kolom) VALUES (?, ?, ?)
    ''', (item["warna"], item["baris"], item["kolom"]))

# Simpan dan tutup koneksi
conn.commit()
conn.close()
