# Liuyun

## Introduction

Liuyun AI was established in early March 2023, focusing on providing artificial intelligence application services 
to empower individuals and small and medium-sized businesses with digitalization services.

## Pricing

| Request | Price (RMB) | Price (USD) |
| --- | --- | --- |
| 600 | 29.8 RMB | 4.62 USD |
| 4500 | 100 RMB | 15.50 USD |
| 10,000 | 198 RMB | 30.70 USD |
| 60,000 | 1088 RMB | 168.79 USD |
| 10 | 0.01 RMB | 0.0014 USD |

** USD price might change according accordingly based on most updated currency exchange rate.

## API Doc

```
curl 'https://liuyuncopilot.com/gpt/api/chat' \
  -H 'access-token: YOUR_TOKEN_HERE' \
  --data-raw $'{"model":{"id":"gpt-3.5-turbo","name":"GPT-3.5","maxLength":12000,"tokenLimit":4000},"messages":[{"role":"user","content":"translate \\"流云AI成立于2023年3月初，专注人 工智能应用服务，助力个人及中小企 业A数智化服务\\""},{"role":"assistant","content":"\\"流云AI\\" was established in early March 2023, focusing on providing artificial intelligence application services to empower individuals and small and medium-sized businesses with digitalization services."},{"role":"user","content":"test"}],"key":"","prompt":"You are ChatGPT, a large language model trained by OpenAI. Follow the user\'s instructions carefully. Respond using markdown.","temperature":1,"conversationId":"7559c220-1ac7-4b54-a653-e3bd2b0c47c8"}' \
  --compressed
```
