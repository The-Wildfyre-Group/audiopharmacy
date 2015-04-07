require 'test_helper'

class PagesControllerTest < ActionController::TestCase
  test "should get band" do
    get :band
    assert_response :success
  end

  test "should get music" do
    get :music
    assert_response :success
  end

  test "should get events" do
    get :events
    assert_response :success
  end

  test "should get gallery" do
    get :gallery
    assert_response :success
  end

  test "should get news" do
    get :news
    assert_response :success
  end

  test "should get poetry" do
    get :poetry
    assert_response :success
  end

  test "should get contact" do
    get :contact
    assert_response :success
  end

end
