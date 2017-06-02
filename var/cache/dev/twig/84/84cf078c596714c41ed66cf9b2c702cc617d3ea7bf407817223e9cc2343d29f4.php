<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_227bf05438f4c997854767723c58bf4578b66eb4f3a59fe8dc8d8d7716f7685d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e6443f9b14e9072bb632004640503933ffcca2050a6db2c1d1fcbf84f76f498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6443f9b14e9072bb632004640503933ffcca2050a6db2c1d1fcbf84f76f498->enter($__internal_4e6443f9b14e9072bb632004640503933ffcca2050a6db2c1d1fcbf84f76f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_753380798d6c99e185d376a9905b006f2f5808325c97c66bd615ad22b3329a9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_753380798d6c99e185d376a9905b006f2f5808325c97c66bd615ad22b3329a9b->enter($__internal_753380798d6c99e185d376a9905b006f2f5808325c97c66bd615ad22b3329a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4e6443f9b14e9072bb632004640503933ffcca2050a6db2c1d1fcbf84f76f498->leave($__internal_4e6443f9b14e9072bb632004640503933ffcca2050a6db2c1d1fcbf84f76f498_prof);

        
        $__internal_753380798d6c99e185d376a9905b006f2f5808325c97c66bd615ad22b3329a9b->leave($__internal_753380798d6c99e185d376a9905b006f2f5808325c97c66bd615ad22b3329a9b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1d60c096976d480da3ac1ee9f088574a28585daa27351a6c3393377eb86b39a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d60c096976d480da3ac1ee9f088574a28585daa27351a6c3393377eb86b39a1->enter($__internal_1d60c096976d480da3ac1ee9f088574a28585daa27351a6c3393377eb86b39a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_d5510be831dee500308155f7c3dfdd83d77ba65e1f759feb8c990602b277f18c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5510be831dee500308155f7c3dfdd83d77ba65e1f759feb8c990602b277f18c->enter($__internal_d5510be831dee500308155f7c3dfdd83d77ba65e1f759feb8c990602b277f18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_d5510be831dee500308155f7c3dfdd83d77ba65e1f759feb8c990602b277f18c->leave($__internal_d5510be831dee500308155f7c3dfdd83d77ba65e1f759feb8c990602b277f18c_prof);

        
        $__internal_1d60c096976d480da3ac1ee9f088574a28585daa27351a6c3393377eb86b39a1->leave($__internal_1d60c096976d480da3ac1ee9f088574a28585daa27351a6c3393377eb86b39a1_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6db1d76bf23b823fd2e73ab2b68d8c85f32923b8ce6233628d17a7ead45043a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db1d76bf23b823fd2e73ab2b68d8c85f32923b8ce6233628d17a7ead45043a4->enter($__internal_6db1d76bf23b823fd2e73ab2b68d8c85f32923b8ce6233628d17a7ead45043a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_63132bf6ab73e9716de40a186bedb644bd73ff6d4e11463988ffacfcbc1fe67b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63132bf6ab73e9716de40a186bedb644bd73ff6d4e11463988ffacfcbc1fe67b->enter($__internal_63132bf6ab73e9716de40a186bedb644bd73ff6d4e11463988ffacfcbc1fe67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_63132bf6ab73e9716de40a186bedb644bd73ff6d4e11463988ffacfcbc1fe67b->leave($__internal_63132bf6ab73e9716de40a186bedb644bd73ff6d4e11463988ffacfcbc1fe67b_prof);

        
        $__internal_6db1d76bf23b823fd2e73ab2b68d8c85f32923b8ce6233628d17a7ead45043a4->leave($__internal_6db1d76bf23b823fd2e73ab2b68d8c85f32923b8ce6233628d17a7ead45043a4_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_16236598f82f0df849e4e848371a8308dc1c8c410dbc93563beb50339400a15b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16236598f82f0df849e4e848371a8308dc1c8c410dbc93563beb50339400a15b->enter($__internal_16236598f82f0df849e4e848371a8308dc1c8c410dbc93563beb50339400a15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e81d9ac2b2a5dddc28bb467ce2f4795b4ca72d37f5cabfdab1fc020203e637ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81d9ac2b2a5dddc28bb467ce2f4795b4ca72d37f5cabfdab1fc020203e637ea->enter($__internal_e81d9ac2b2a5dddc28bb467ce2f4795b4ca72d37f5cabfdab1fc020203e637ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e81d9ac2b2a5dddc28bb467ce2f4795b4ca72d37f5cabfdab1fc020203e637ea->leave($__internal_e81d9ac2b2a5dddc28bb467ce2f4795b4ca72d37f5cabfdab1fc020203e637ea_prof);

        
        $__internal_16236598f82f0df849e4e848371a8308dc1c8c410dbc93563beb50339400a15b->leave($__internal_16236598f82f0df849e4e848371a8308dc1c8c410dbc93563beb50339400a15b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
