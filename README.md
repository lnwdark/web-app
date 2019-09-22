"# web-app" 

docker run -d --rm --name database -e POSTGRES_USER=admin -e POSTGRES_PASSWORD=lnwdark postgres:9.6
create table Users
```sql
CREATE TABLE users(
id  SERIAL PRIMARY KEY,
user_name character(255),
passwords character(255),
email  character(255),
status numeric,
ord_amount numeric,
created_at date,
update_at date
);
```