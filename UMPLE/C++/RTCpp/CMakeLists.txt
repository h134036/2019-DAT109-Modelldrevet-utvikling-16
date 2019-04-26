cmake_minimum_required(VERSION 3.0)
project(model)

set(CMAKE_CXX_STANDARD 11)
include_directories(${CMAKE_SOURCE_DIR})


set(SOURCE_FILES
model_Model.h
model_Main.cpp
Prosjekt.h
Prosjekt.cpp
Arrangementdeltagelse.h
Arrangementdeltagelse.cpp
Stemme.h
Stemme.cpp
Bruker.h
Bruker.cpp
Bedrift.h
Bedrift.cpp
Brukegruppe.h
Brukegruppe.cpp
Arrengement.h
Arrengement.cpp
Stemmemetode.h
Stemmemetode.cpp
Studie.h
Studie.cpp
Kategori.h
Kategori.cpp)

add_executable(model ${SOURCE_FILES})