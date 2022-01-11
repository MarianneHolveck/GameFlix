# MLD GameFlix

GAME(id, name, synopsis, trailer, note, #EDITOR(id), #DEVELOPER(id), #SERIE(id))
GAME_CATEGORY(#CATEGORY(id), #GAME(id))
CATEGORY(id, name)
SERIE(id, name)
WALKTHROUGH(id, name, link, part, #GAME(id))
USER(id, name, email, password, profilePic)
GAME_USER(#GAME(id), #USER(id))
DEVELOPER(id, name)
EDITOR(id, name)
PLATFORM(id, name)
PLATFORM_GAME(#GAME(id), #PLATFORM(id))