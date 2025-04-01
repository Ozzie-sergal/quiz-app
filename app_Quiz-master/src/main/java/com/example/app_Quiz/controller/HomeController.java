package com.example.app_Quiz.controller;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {

    @GetMapping("/")
    public String home(Model model) {
        model.addAttribute("username", "Gość"); // Przykładowa zmienna do Thymeleaf
        return "index"; // Zwraca nazwę pliku HTML bez rozszerzenia
    }
}