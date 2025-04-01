package com.example.app_Quiz.controller;


import com.example.app_Quiz.model.LearningItem;
import com.example.app_Quiz.services.LearningItemService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/teacher")
public class TeacherController {
    @Autowired
    private LearningItemService learningItemService;

    @GetMapping("/learning-items")
    public String showLearningItems(Model model) {
        model.addAttribute("learningItems", learningItemService.getLearningItemsBySubject(1L)); // Przykładowy przedmiot
        return "teacher/learning-items";
    }

    @PostMapping("/learning-items")
    public String createLearningItem(LearningItem learningItem) {
        learningItemService.createLearningItem(learningItem);
        return "redirect:/teacher/learning-items";
    }
}