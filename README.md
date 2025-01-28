# Yeni Finans API -> [Truncgil Finance API v5.0](https://finance.truncgil.com/)
# Laravel Plugin -> (https://github.com/truncgil/laravel-truncgil-finance)
# Finans API Kullanımı

Bu belge, [Finans API](https://finans.truncgil.com/v4/today.json) kullanarak döviz ve altın fiyatlarını almak için farklı programlama dillerinde örnekler içermektedir.

## API Kullanımı

### Endpoint:
```
https://finans.truncgil.com/v4/today.json
```

### Dönen JSON Örneği:
```json
{
  "Update_Date": "2025-01-17 16:25:10",
  "USD": {
    "Buying": "35.5656",
    "Selling": "35.5694",
    "Change": "0.40",
    "Type": "Currency"
  },
  "EUR": {
    "Buying": "36.6038",
    "Selling": "36.6136",
    "Change": "-0.01",
    "Type": "Currency"
  }
}
```

---

## Örnek Kullanımlar

### 1. PHP
```php
<?php
$json = file_get_contents('https://finans.truncgil.com/v4/today.json');
$data = json_decode($json, true);
echo "USD Alış: " . $data['USD']['Buying'];
?>
```

### 2. Python
```python
import requests

data = requests.get("https://finans.truncgil.com/v4/today.json").json()
print(f"USD Alış: {data['USD']['Buying']}")
```

### 3. JavaScript (Node.js - Axios)
```javascript
const axios = require('axios');

axios.get('https://finans.truncgil.com/v4/today.json')
  .then(response => {
    console.log("USD Alış:", response.data.USD.Buying);
  })
  .catch(error => console.error(error));
```

### 4. Java
```java
import java.io.*;
import java.net.*;
import org.json.JSONObject;

public class FinansAPI {
    public static void main(String[] args) throws Exception {
        URL url = new URL("https://finans.truncgil.com/v4/today.json");
        HttpURLConnection conn = (HttpURLConnection) url.openConnection();
        conn.setRequestMethod("GET");

        BufferedReader in = new BufferedReader(new InputStreamReader(conn.getInputStream()));
        String inputLine;
        StringBuffer response = new StringBuffer();

        while ((inputLine = in.readLine()) != null) {
            response.append(inputLine);
        }
        in.close();

        JSONObject json = new JSONObject(response.toString());
        System.out.println("USD Alış: " + json.getJSONObject("USD").getString("Buying"));
    }
}
```

### 5. C#
```csharp
using System;
using System.Net.Http;
using Newtonsoft.Json.Linq;

class Program {
    static async System.Threading.Tasks.Task Main() {
        HttpClient client = new HttpClient();
        string response = await client.GetStringAsync("https://finans.truncgil.com/v4/today.json");
        JObject data = JObject.Parse(response);
        Console.WriteLine("USD Alış: " + data["USD"]["Buying"]);
    }
}
```

### 6. Go
```go
package main

import (
    "encoding/json"
    "fmt"
    "net/http"
    "io/ioutil"
)

type Currency struct {
    Buying string `json:"Buying"`
    Selling string `json:"Selling"`
    Type string `json:"Type"`
    Change string `json:"Change"`
}

type Response struct {
    USD Currency `json:"USD"`
}

func main() {
    resp, _ := http.Get("https://finans.truncgil.com/v4/today.json")
    body, _ := ioutil.ReadAll(resp.Body)
    var data Response
    json.Unmarshal(body, &data)
    fmt.Println("USD Alış:", data.USD.Buying)
}
```

## Sonuç
Bu döküman, Finans API'yi kullanarak döviz ve altın fiyatlarını almanın farklı programlama dillerinde nasıl yapılacağını gösterir. API'den dönen JSON verisini parse ederek, döviz kurlarına erişebilir ve kullanabilirsiniz.

---

**Not:** API'nin kullanım sınırları, güncellenme sıklığı veya erişim politikaları hakkında bilgi almak için [Finans API](https://finans.truncgil.com/) sayfasını ziyaret edebilirsiniz.

