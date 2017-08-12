FROM blackleg/elgg-cron
MAINTAINER  Som Energia

# Add crontab file in the cron directory
COPY .docker/cron/crontab /etc/cron.d/elgg
RUN chmod 0644 /etc/cron.d/elgg
