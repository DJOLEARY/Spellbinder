<svg viewBox="0 0 240 240" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
  <!-- Card Outline -->
  <rect x="60" y="50" width="120" height="160" rx="12" ry="12"
        fill="#ffffff" stroke="#333" stroke-width="3"/>

  <!-- Centered Candlestick Chart -->
  <!-- Candle positions: 95, 120, 145 (evenly spaced within the 120px card width) -->

  <!-- Bullish Candle -->
  <line x1="95" y1="110" x2="95" y2="155" stroke="#4caf50" stroke-width="2"/>
  <rect x="90" y="120" width="10" height="30" rx="2" fill="#4caf50"/>

  <!-- Bearish Candle -->
  <line x1="120" y1="90" x2="120" y2="160" stroke="#f44336" stroke-width="2"/>
  <rect x="115" y="90" width="10" height="50" rx="2" fill="#f44336"/>

  <!-- Bullish Candle -->
  <line x1="145" y1="115" x2="145" y2="150" stroke="#4caf50" stroke-width="2"/>
  <rect x="140" y="125" width="10" height="25" rx="2" fill="#4caf50"/>
</svg>
