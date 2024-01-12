FROM kong:latest

ENV KONG_DATABASE=postgres
ENV KONG_PG_HOST=kong-db
ENV KONG_PG_USER=kong
ENV KONG_PG_PASSWORD=admin
ENV KONG_PG_DATABASE=kong

USER root

RUN chown -R kong: /etc/kong

EXPOSE 8000 8443

CMD ["kong", "docker-start"]
