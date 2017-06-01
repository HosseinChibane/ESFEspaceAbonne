<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_ab4b213342269119759cc4e09446537d982fe6d7a400070235f3af9b4889c713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d841b8db17e6356a7a62ad1d4ef47f09feef10fdefb3db655516a94dc501af2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d841b8db17e6356a7a62ad1d4ef47f09feef10fdefb3db655516a94dc501af2f->enter($__internal_d841b8db17e6356a7a62ad1d4ef47f09feef10fdefb3db655516a94dc501af2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_7379bfcbb9b3477255d9b6c2ebc696b267dcec92359ce9ec33918cc8a54262d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7379bfcbb9b3477255d9b6c2ebc696b267dcec92359ce9ec33918cc8a54262d9->enter($__internal_7379bfcbb9b3477255d9b6c2ebc696b267dcec92359ce9ec33918cc8a54262d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d841b8db17e6356a7a62ad1d4ef47f09feef10fdefb3db655516a94dc501af2f->leave($__internal_d841b8db17e6356a7a62ad1d4ef47f09feef10fdefb3db655516a94dc501af2f_prof);

        
        $__internal_7379bfcbb9b3477255d9b6c2ebc696b267dcec92359ce9ec33918cc8a54262d9->leave($__internal_7379bfcbb9b3477255d9b6c2ebc696b267dcec92359ce9ec33918cc8a54262d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
