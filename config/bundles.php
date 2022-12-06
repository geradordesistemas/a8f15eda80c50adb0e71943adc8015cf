<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    JMS\SerializerBundle\JMSSerializerBundle::class => ['all' => true],
    Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle::class => ['all' => true],
    Sonata\Twig\Bridge\Symfony\SonataTwigBundle::class => ['all' => true],
    Sonata\Doctrine\Bridge\Symfony\SonataDoctrineBundle::class => ['all' => true],
    Sonata\Form\Bridge\Symfony\SonataFormBundle::class => ['all' => true],
    Sonata\Exporter\Bridge\Symfony\SonataExporterBundle::class => ['all' => true],
    Sonata\BlockBundle\SonataBlockBundle::class => ['all' => true],
    Knp\Bundle\MenuBundle\KnpMenuBundle::class => ['all' => true],
    Sonata\AdminBundle\SonataAdminBundle::class => ['all' => true],
    Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle::class => ['all' => true],
    Sonata\MediaBundle\SonataMediaBundle::class => ['all' => true],
    FOS\RestBundle\FOSRestBundle::class => ['all' => true],
    Nelmio\ApiDocBundle\NelmioApiDocBundle::class => ['all' => true],
    Nelmio\CorsBundle\NelmioCorsBundle::class => ['all' => true],
    SimpleThings\EntityAudit\SimpleThingsEntityAuditBundle::class => ['all' => true],
    App\Application\Project\ContentBundle\ApplicationProjectContentBundle::class => ['all' => true],
    App\Application\Project\SettingBundle\ApplicationProjectSettingBundle::class => ['all' => true],
    App\Application\Project\SecurityAdminBundle\ApplicationProjectSecurityAdminBundle::class => ['all' => true],
    App\Application\Project\SecurityUserBundle\ApplicationProjectSecurityUserBundle::class => ['all' => true],

    /** Schema Bundles */
    App\Application\Schema\ProvaBundle\ApplicationSchemaProvaBundle::class => ['all' => true],
    App\Application\Schema\TipoProvaBundle\ApplicationSchemaTipoProvaBundle::class => ['all' => true],
    App\Application\Schema\DisciplinaBundle\ApplicationSchemaDisciplinaBundle::class => ['all' => true],
    App\Application\Schema\ProfessorBundle\ApplicationSchemaProfessorBundle::class => ['all' => true],
    App\Application\Schema\GradeCurricularBundle\ApplicationSchemaGradeCurricularBundle::class => ['all' => true],
    App\Application\Schema\CursoBundle\ApplicationSchemaCursoBundle::class => ['all' => true],

];