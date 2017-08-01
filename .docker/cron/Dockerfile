FROM debian:jessie
MAINTAINER  Som Energia


# Install dependencies
RUN apt-get update && apt-get -y install cron libwww-perl \ 
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
 
# Create the log file to be able to run tail
RUN touch /var/log/cron.log

# Add crontab file in the cron directory
ADD .docker/cron/crontab /etc/cron.d/elgg

# Give execution rights on the cron job
RUN chmod 0644 /etc/cron.d/elgg

# Run the command on container startup
CMD cron && tail -f /var/log/cron.log