package com.example.app_Quiz.controller;


import com.example.app_Quiz.model.Subject;
import com.example.app_Quiz.repository.SubjectRepository;
import com.example.app_Quiz.services.SubjectService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
@RequestMapping("/admin")
public class AdminController {
    @Autowired
    private SubjectService subjectService;

    @GetMapping("/subjects")
    public String showSubjects(Model model) {
        model.addAttribute("subjects", subjectService.getAllSubjects());
        return "admin/subjects";
    }

    @PostMapping("/subjects")
    public String createSubject(Subject subject) {
        subjectService.createSubject(subject);
        return "redirect:/admin/subjects";
    }


}