<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_f8c7ae573af5beb2ac1f6c58a47c3dd0bb2b11b200efbc13460ab4db02d43ba0 extends Twig_Template
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
        $__internal_73ee9e8b0d19ef42c8db07c3003c2689a9250e6bb8eb242cc224f0cd3f8c6039 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ee9e8b0d19ef42c8db07c3003c2689a9250e6bb8eb242cc224f0cd3f8c6039->enter($__internal_73ee9e8b0d19ef42c8db07c3003c2689a9250e6bb8eb242cc224f0cd3f8c6039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e21707807d4c464848a7df39a989f0ad92fb3e8460280ecd033a12a11d801241 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21707807d4c464848a7df39a989f0ad92fb3e8460280ecd033a12a11d801241->enter($__internal_e21707807d4c464848a7df39a989f0ad92fb3e8460280ecd033a12a11d801241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_73ee9e8b0d19ef42c8db07c3003c2689a9250e6bb8eb242cc224f0cd3f8c6039->leave($__internal_73ee9e8b0d19ef42c8db07c3003c2689a9250e6bb8eb242cc224f0cd3f8c6039_prof);

        
        $__internal_e21707807d4c464848a7df39a989f0ad92fb3e8460280ecd033a12a11d801241->leave($__internal_e21707807d4c464848a7df39a989f0ad92fb3e8460280ecd033a12a11d801241_prof);

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
