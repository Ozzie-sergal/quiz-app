package com.example.app_Quiz.controller;


import com.example.app_Quiz.model.LearningItem;
import com.example.app_Quiz.services.LearningItemService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.CrossOrigin;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@RequestMapping("/api")
@CrossOrigin(origins = "*")
public class LessonRestController {

    @Autowired
    private LearningItemService learningItemService;

    @GetMapping("lessons")
    public List<LearningItem> getAllLessons() {
        return learningItemService.getAllItems();
    }

}
