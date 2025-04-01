package com.example.app_Quiz.repository;

import com.example.app_Quiz.model.LearningItem;
import org.springframework.data.jpa.repository.JpaRepository;

import java.util.List;

public interface LearningItemRepository extends JpaRepository<LearningItem, Long> {
    List<LearningItem> findBySubjectId(Long subjectId);
}
