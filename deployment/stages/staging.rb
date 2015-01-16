role :db,           "staging.perspektiva360.com"
role :web,          "staging.perspektiva360.com"

set :stage,         "staging"

# Open site after deploying
after "deploy" do
    system "open http://#{branch}.#{stage}.#{domain}/"
end
