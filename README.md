
GET https://finans.truncgil.com/v4/today.json
json
{
"USD": {
"Buying": "35.5652",
"Selling": "35.5693",
"Type": "Currency",
"Change": "0.39"
}
}
json
{
"GRA": {
"name": "GRAM ALTIN",
"Buying": "3100.20",
"Selling": "3100.58",
"Type": "Gold",
"Change": "0.23"
}
}
typescript
// api.ts
const fetchRates = async () => {
try {
const response = await fetch('https://finans.truncgil.com/v4/today.json');
const data = await response.json();
return data;
} catch (error) {
console.error('Veri çekme hatası:', error);
throw error;
}
};
// Kullanım örneği (React Component)
import { useState, useEffect } from 'react';
function ExchangeRates() {
const [rates, setRates] = useState(null);
useEffect(() => {
const getRates = async () => {
const data = await fetchRates();
setRates(data);
};
getRates();
}, []);
return (
<div>
{rates && (
<div>
<p>USD Alış: {rates.USD.Buying}</p>
<p>USD Satış: {rates.USD.Selling}</p>
</div>
)}
</div>
);
}
php
// Laravel Controller
public function getRates()
{
try {
$response = Http::get('https://finans.truncgil.com/v4/today.json');
return $response->json();
} catch (\Exception $e) {
return response()->json(['error' => $e->getMessage()], 500);
}
}
// Laravel Route
Route::get('/exchange-rates', [ExchangeController::class, 'getRates']);
python
import requests
def get_rates():
try:
response = requests.get('https://finans.truncgil.com/v4/today.json')
return response.json()
except requests.RequestException as e:
print(f"Hata: {e}")
return None
javascript
const axios = require('axios');
async function getRates() {
try {
const response = await axios.get('https://finans.truncgil.com/v4/today.json');
return response.data;
} catch (error) {
console.error('Hata:', error);
throw error;
}
}
