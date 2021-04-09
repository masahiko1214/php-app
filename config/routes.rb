Rails.application.routes.draw do
  root to: 'phps#index'
  resources :phps, only: :index
end
