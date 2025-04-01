package com.example.app_Quiz.services;


import com.example.app_Quiz.model.LearningItem;
import com.example.app_Quiz.repository.LearningItemRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class LearningItemService {
    @Autowired
    private LearningItemRepository learningItemRepository;

    public List<LearningItem> getLearningItemsBySubject(long subjectId) {
        return learningItemRepository.findBySubjectId(subjectId);
    }

    public LearningItem createLearningItem(LearningItem learningItem) {
        return learningItemRepository.save(learningItem);
    }
}
