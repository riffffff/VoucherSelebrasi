from bs4 import BeautifulSoup
import json
import re
from collections import defaultdict

# Baca file HTML
with open('E:/Voucher Selebrasi/Formasi 10/formasi.html', 'r', encoding='utf-8') as f:
    html = f.read()

# Parse HTML
soup = BeautifulSoup(html, 'html.parser')

# Kumpulkan data mentah
temp_data = []

# Ambil semua div dengan atribut data-warna-paper-mob
for div in soup.find_all('div', attrs={"data-warna-paper-mob": True}):
    style = div.get('style', '')

    left_match = re.search(r'left\s*:\s*([\d.]+)px', style, re.IGNORECASE)
    top_match = re.search(r'top\s*:\s*([\d.]+)px', style, re.IGNORECASE)

    if not left_match or not top_match:
        continue

    left = float(left_match.group(1))
    top = float(top_match.group(1))
    warna = div.get('data-warna-paper-mob')

    temp_data.append({
        'warna': warna,
        'left': left,
        'top': top
    })

# Ambil semua nilai top unik dan urutkan dari kecil ke besar (atas ke bawah)
top_values = sorted(set(item['top'] for item in temp_data))

# Buat daftar huruf dari K ke A (maksimal 11 nilai)
huruf_terbalik = list("KJIHGFEDCBA")

# Validasi jumlah baris
if len(top_values) > len(huruf_terbalik):
    raise ValueError("Jumlah nilai 'top' lebih dari 11, tidak cukup huruf dari K ke A")

# Mapping top → huruf baris
top_to_huruf = {top: huruf_terbalik[i] for i, top in enumerate(top_values)}

# Kelompokkan berdasarkan baris/top
baris_dict = defaultdict(list)
for item in temp_data:
    baris_dict[item['top']].append(item)

# Hasil akhir
result = []
for top in top_values:
    baris_huruf = top_to_huruf[top]
    items = sorted(baris_dict[top], key=lambda x: x['left'])  # urut berdasarkan left
    for i, item in enumerate(items, start=1):  # kolom mulai dari 1
        result.append({
            'warna': item['warna'],
            'baris': baris_huruf,
            'kolom': i
        })

# Simpan ke file JSON
with open('E:/Voucher Selebrasi/Formasi 10/formasi.json', 'w', encoding='utf-8') as f:
    json.dump(result, f, indent=2, ensure_ascii=False)

