# Supabase

Supabase said to be a replacement of firebase. I can see its adventage on postgres.
However, its permission control is slightly week. We don't want to control the permission 
based on postgres policy. Basically, low level permission control would concidered as
over killed.

Well Supabase actually provide edge function with could be used to run some permission
senstive backend. It is [Deno](https://deno.com/) based, which would be friendly to
JavaScript/Node developer.

In general, Supabase might be a powerful tool if it provided a better authentication support.
